<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; //agar bisa terhubung dengan database
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdminModel extends Authenticatable
{

    public function alldata()
    {
        return DB::table('tbl_dosen')->get(); //fungsi untuk menampilkan semua data di tbl_dosen
    }
    public function alldatamahasiswa()
    {
        return DB::table('tbl_mahasiswa')->get(); //fungsi untuk menampilkan semua data di tbl_mahasiswa
    }
    public function tambahdata($data)
    {
        DB::table('tbl_dosen')->insert($data); //fungsi untuk menambahkan data ke tbl_dosen
    }
    public function tambahdatamahasiswa($data)
    {
        DB::table('tbl_mahasiswa')->insert($data); //fungsi untuk menambahkan data ke tbl_mahasiswa
    }
    public function detailmahasiswa($id)
    {
        return DB::table('tbl_mahasiswa')->where('id', $id)->first(); //fungsi untuk mengetahui id di table mahasiswa
    }
    public function updatedatawali($id, $data)
    {
        return DB::table('tbl_mahasiswa') //fungsi untuk mengubah/edit by ID di table mahasiswa
            ->where('id', $id)
            ->update($data);
    }
    public function deletedosen($id)
    {
        return DB::delete('delete from tbl_dosen where id = ?', [$id]); //fungsi untuk menghapus data by ID di tbl_dosen
    }
    public function deletemahasiswa($id)
    {
        return DB::delete('delete from tbl_mahasiswa where id = ?', [$id]); //fungsi untuk menghapus data by ID di tbl_mahasiswa
    }
    public function tambahdatariwayat($riwayat)
    {
        DB::table('tbl_riwayat')->insert($riwayat);
    }
    public function deleteriwayat($id)
    {
        return DB::delete('delete from tbl_riwayat where id = ?', [$id]); //fungsi untuk menghapus data by ID di tbl_mahasiswa
    }
}
