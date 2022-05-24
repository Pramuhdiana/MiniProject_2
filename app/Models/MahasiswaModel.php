<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; //agar bisa terhubung dengan database
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class MahasiswaModel extends Authenticatable
{
    //fungsi model menampilkan semua data table tbl_dosenwali
    public function alldata()
    {
        return DB::table('tbl_dosen')->get();
    }

    public function alldatamahasiswa()
    {
        return DB::table('tbl_mahasiswa')->get();
    }

    
    public function updatedatacatatan($id, $data)
    {
        return DB::table('tbl_mahasiswa')
        ->where('id', $id)
        ->update($data);
    }

}
