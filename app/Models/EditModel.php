<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EditModel extends Model
{
    public function detailmahasiswa($id)
    {
        return DB::table('tbl_mahasiswa')->where('id', $id)->first(); //fungsi untuk mengetahui id di table mahasiswa
    }

    public function updatedatamahasiswa($id, $data)
    {
        return DB::table('tbl_mahasiswa')
            ->where('id', $id)
            ->update($data);
    }

    public function detaildosen($id)
    {
        return DB::table('tbl_dosen')->where('id', $id)->first(); //fungsi untuk mengetahui id di table mahasiswa
    }

    public function updatedatadosen($id, $data)
    {
        return DB::table('tbl_dosen')
            ->where('id', $id)
            ->update($data);
    }
}
