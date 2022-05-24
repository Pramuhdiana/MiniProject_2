<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{

    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }
    public function rekap_data()
    {
        //menyimpan semua data kedalam variabel
        $data = [
            'mahasiswa' => $this->AdminModel->alldatamahasiswa(),
            'dosen' => $this->AdminModel->alldata(),
        ];
        //mengirim data yang sudah di simpan ke view agar bisa di tampilkan
        return view('v_rdp', $data);
    }

    public function data_dosen()
    {
        $data = [
            'dosen' => $this->AdminModel->alldata(),
        ];
        return view('v_datadosen', $data);
    }

    public function data_mahasiswa()
    {
        $data = [
            'mahasiswa' => $this->AdminModel->alldatamahasiswa(),
            'dosen' => $this->AdminModel->alldata(),
        ];
        return view('v_datamahasiswa', $data);
    }

    public function add_dosen()
    {
        return view('v_adddosen');
    }

    public function tambah()
    {
        //simpan data
        //upload file 
        $foto = Request()->foto;
        $namafile = Request()->nama . '.' . $foto->extension();
        $foto->move(public_path('foto'), $namafile);

        //masukan ke database
        $data = [
            'nama' => Request()->nama,
            'level' => Request()->level,
            'email' => Request()->email,
            'password' => bcrypt(Request()->password),
            'jeniskelamin' => Request()->jk,
            'foto' => $namafile,
        ];
        $this->AdminModel->tambahdata($data);
        return redirect()->route('datadosen')->with('Pesan', 'Data telah berhasil di tambahkan');
    }

    public function add_mahasiswa()
    {
        return view('v_addmahasiswa');
    }

    public function tambah_mahasiswa()
    {
        //simpan data
        //upload file 
        $foto = Request()->foto;
        $namafile = Request()->nama . '.' . $foto->extension();
        $foto->move(public_path('foto'), $namafile);

        //masukan ke database
        $data = [
            'nama' => Request()->nama,
            'jurusan' => Request()->jurusan,
            'level' => Request()->level,
            'email' => Request()->email,
            'password' => bcrypt(Request()->password),
            'jeniskelamin' => Request()->jk,
            'foto' => $namafile,
            'wali' => "",
            'catatan' => "",
        ];
        $this->AdminModel->tambahdatamahasiswa($data);
        return redirect()->route('datamahasiswa')->with('Pesan', 'Data telah berhasil di tambahkan');
    }

    public function pilih_wali($id)
    {
        if (!$this->AdminModel->detailmahasiswa($id)) {
            abort(404);
        }
        $data = [
            'mahasiswa' => $this->AdminModel->detailmahasiswa($id),
            'dosen' => $this->AdminModel->alldata(),
        ];
        return view('v_pilihwali', $data);
    }

    public function update_wali($id)
    {
        //update data
        $data = [
            'nama' => Request()->nama,
            'jeniskelamin' => Request()->jk,
            'wali' => Request()->wali,
        ];
        $this->AdminModel->updatedatawali($id, $data);
        return redirect()->route('rekapdata')->with('Pesan', 'Data telah berhasil di Update');
    }

    public function delete_dosen($id)
    {
        $data = [
            'dosen' => $this->AdminModel->deletedosen($id),
        ];
        return redirect()->route('datadosen')->with('Pesan', 'Data telah berhasil di hapus');
    }
    public function delete_mahasiswa($id)
    {
        $data = [
            'mahasiswa' => $this->AdminModel->deletemahasiswa($id),
        ];
        return redirect()->route('datamahasiswa')->with('Pesan', 'Data telah berhasil di hapus');
    }

    public function delete_histori($id)
    {
        $data = [
            'riwayat' => $this->AdminModel->deleteriwayat($id),
        ];
        return redirect()->route('dosen')->with('Pesan', 'Data telah berhasil di hapus');
    }
    public function index()
    {
        $data = [
            'mahasiswa' => $this->AdminModel->alldatamahasiswa(),
            'dosen' => $this->AdminModel->alldata(),
        ];
        return view('v_dataperwalian', $data);
    }

    public function tambah_catatan($id)
    {
        $data = [
            'mahasiswa' => $this->AdminModel->detailmahasiswa($id),
            'dosen' => $this->AdminModel->alldata(),
        ];
        return view('v_admintambahcatatan', $data);
    }

    public function update_catatan($id, Request $request)
    {
        $request->validate([
            'wali' => 'required',
            'catatan' => 'required',
        ]);

        // masukan ke database untuk mengupdate wali dan catatan
        $data = [
            'nama' => Request()->nama,
            'jurusan' => Request()->jurusan,
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
        return redirect()->route('dataperwalian')->with('Pesan', 'Catatan Berhasil Di Tambahkan');
    }
}
