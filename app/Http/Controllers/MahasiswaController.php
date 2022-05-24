<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class MahasiswaController extends BaseController
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->MahasiswaModel = new MahasiswaModel();
        $this->MahasiswaModel = new DosenModel();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->AdminModel->alldatamahasiswa(),
            'dosen' => $this->AdminModel->alldata(),
        ];
        return view('v_mahasiswa', $data);
    }
    public function tambah_catatan($id)
    {
        $data = [
            'mahasiswa' => $this->AdminModel->detailmahasiswa($id),
        ];
        return view('v_tambahcatatan', $data);
    }


    public function update_catatan($id, Request $request)
    {
        $request->validate([
            'wali' => 'required',
        ]);


        // masukan ke database untuk mengupdate wali dan catatan
        $data = [
            'nama' => Request()->nama,
            'jurusan' => Request()->jurusan,
            'level' => Request()->level,
            'email' => Request()->email,
            'password' => Request()->password,
            'jeniskelamin' => Request()->jk,
            'foto' => Request()->foto,
            'wali' => "",
            'catatan' => "",
        ];
        $this->AdminModel->updatedatawali($id, $data);

        $riwayat = [
            'nama_mhs' => Request()->nama,
            'nama_dosen' => Request()->wali,
            'catatan' => Request()->catatan,
        ];
        $this->AdminModel->tambahdatariwayat($riwayat);
        return redirect()->route('mahasiswa')->with('Pesan', 'Catatan Berhasil Di Tambahkan');
    }
}
