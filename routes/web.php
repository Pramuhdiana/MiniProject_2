<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [namacontroller::class, 'namaclassnya']);



//route login
Route::group(['middleware' => ['guest:user,dosen,mahasiswa']], function () {

    Route::get('/login', [CobaController::class, 'index'])->name('login');
    Route::post('/login', [CobaController::class, 'login']);
});
//route logout
Route::post('/logout', [CobaController::class, 'logout'])->name('logout');

//middleware admin dosen mahasiswa

Route::get('/', function () {

    return view('v_home');
})->middleware('auth:user,dosen,mahasiswa', 'ceklevel:admin,dosen,mahasiswa');


//route admin
Route::group(['middleware' => ['auth:user', 'ceklevel:admin']], function () {

    //route menampilkan data
    Route::get('/admin/rekapdata', [AdminController::class, 'rekap_data'])->name('rekapdata');

    Route::get('/admin/datamahasiswa', [AdminController::class, 'data_mahasiswa'])->name('datamahasiswa');
    Route::get('/admin/datadosen', [AdminController::class, 'data_dosen'])->name('datadosen');
    //route untuk tambah data
    Route::get('/admin/adddosen', [AdminController::class, 'add_dosen']);
    Route::post('admin/tambah', [AdminController::class, 'tambah']);
    Route::get('/admin/addmahasiswa', [AdminController::class, 'add_mahasiswa']);
    Route::post('/admin/tambahmahasiswa', [AdminController::class, 'tambah_mahasiswa']);

    //route untuk mencari data dosen
    Route::get('/admin/caridosen', [AdminController::class, 'cari_dosen']);

    //route untuk edit data
    Route::get('/admin/editmahasiswa/{id}', [EditController::class, 'editmahasiswa']);
    Route::post('/admin/updatemahasiswa/{id}', [EditController::class, 'updatemahasiswa']);
    Route::get('/admin/editdosen/{id}', [EditController::class, 'editdosen']);
    Route::post('/admin/updatedosen/{id}', [EditController::class, 'updatedosen']);

    //route tambah wali
    Route::get('/admin/pilihwali/{id}', [AdminController::class, 'pilih_wali']);
    Route::post('/admin/updatewali/{id}', [AdminController::class, 'update_wali']);
    Route::get('/admin/dataperwalian', [AdminController::class, 'index'])->name('dataperwalian');

    //route delete
    Route::get('/admin/deletedosen/{id}', [AdminController::class, 'delete_dosen']);
    Route::get('/admin/deletemahasiswa/{id}', [AdminController::class, 'delete_mahasiswa']);
    Route::get('/admin/deletehistori/{id}', [AdminController::class, 'delete_histori']);

    //tambah catatan dari admin
    Route::get('/admin/catatan/{id}', [AdminController::class, 'tambah_catatan']);
    Route::post('/admin/addcatatan/{id}', [AdminController::class, 'update_catatan']);
});


//route admin, dosen
Route::group(['middleware' => ['auth:user,dosen', 'ceklevel:admin,dosen']], function () {
    //route untuk edit dosen
    Route::get('/user/dosenedit/{id}', [EditController::class, 'userdosenedit']);
    Route::post('/user/updatedosen/{id}', [EditController::class, 'userdosenupdate']);
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
});

//route admin, mahasiswa
Route::group(['middleware' => ['auth:user,mahasiswa', 'ceklevel:admin,mahasiswa']], function () {

    //route untuk edit users
    Route::get('/user/editmahasiswa/{id}', [EditController::class, 'usermahasiswaedit']);
    Route::post('/user/updatemahasiswa/{id}', [EditController::class, 'usermahasiswaupdate']);

    //route mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

    //route tambah catatan
    Route::get('/mahasiswa/catatan/{id}', [MahasiswaController::class, 'tambah_catatan']);
    Route::post('/mahasiswa/addcatatan/{id}', [MahasiswaController::class, 'update_catatan']);
});

//route menampilkan histori perwalian by name
Route::get('/dosen/perwalian/{nama}', [DosenController::class, 'histori'])->name('histori');
