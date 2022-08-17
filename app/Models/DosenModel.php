<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; //agar bisa terhubung dengan database
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DosenModel extends Authenticatable
{
    //fungsi model menampilkan semua data table tbl_riwayat
    public function alldata()
    {
        return DB::table('tbl_riwayat')
            ->orderBy('nama_mhs', 'asc')
            ->get();
    }

    public function tambahdatariwayat($riwayat)
    {
        DB::table('tbl_riwayat')->insert($riwayat);
    }

    public function riwayat($nama)
    {
        return DB::table('tbl_riwayat')
            ->where('nama_dosen', $nama)
            ->get();
    }
}
