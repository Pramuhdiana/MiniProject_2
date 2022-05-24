<?php

namespace App\Http\Controllers;

use App\Models\EditModel;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __construct()
    {
        $this->EditModel = new EditModel();
    }

    public function editmahasiswa($id)
    {
        $data = [
            'mahasiswa' => $this->EditModel->detailmahasiswa($id),
        ];
        return view('v_editmahasiswa', $data);
    }

    public function updatemahasiswa($id)
    {

        //simpan data
        if (Request()->foto <> "") {

            //upload file 
            $foto = Request()->foto;
            $namafile = Request()->nama . '.' . $foto->extension();
            $foto->move(public_path('foto'), $namafile);

            // masukan ke database 
            $data = [
                'nama' => Request()->nama,
                'jurusan' => Request()->jurusan,
                'email' => Request()->email,
                'jeniskelamin' => Request()->jk,
                'foto' => $namafile,
            ];
            $this->EditModel->updatedatamahasiswa($id, $data);
        } else {
            $data = [

                'nama' => Request()->nama,
                'jurusan' => Request()->jurusan,
                'email' => Request()->email,
                'jeniskelamin' => Request()->jk,
            ];
            $this->EditModel->updatedatamahasiswa($id, $data);
        }
        return redirect()->route('datamahasiswa')->with('Pesan', 'Data telah berhasil di Update');
    }


    public function usermahasiswaedit($id)
    {
        $data = [
            'mahasiswa' => $this->EditModel->detailmahasiswa($id),
        ];
        return view('v_usereditmahasiswa', $data);
    }

    public function usermahasiswaupdate($id)
    {
        $data = [
            'password' => bcrypt(Request()->password),
        ];
        $this->EditModel->updatedatamahasiswa($id, $data);

        return redirect()->route('mahasiswa')->with('Pesan', 'Akun telah berhasil di Update');
    }

    public function userdosenedit($id)
    {
        $data = [
            'dosen' => $this->EditModel->detaildosen($id),
        ];
        return view('v_usereditdosen', $data);
    }

    public function userdosenupdate($id)
    {
        $data = [
            'password' => bcrypt(Request()->password),
        ];
        $this->EditModel->updatedatadosen($id, $data);

        return redirect()->route('dosen')->with('Pesan', 'Akun telah berhasil di Update');
    }

    public function editdosen($id)
    {
        $data = [
            'dosen' => $this->EditModel->detaildosen($id),
        ];
        return view('v_editdosen', $data);
    }

    public function updatedosen($id)
    {

        //simpan data
        if (Request()->foto <> "") {

            //upload file 
            $foto = Request()->foto;
            $namafile = Request()->nama . '.' . $foto->extension();
            $foto->move(public_path('foto'), $namafile);

            // masukan ke database 
            $data = [
                'nama' => Request()->nama,
                'email' => Request()->email,
                'jeniskelamin' => Request()->jk,
                'foto' => $namafile,
            ];
            $this->EditModel->updatedatadosen($id, $data);
        } else {
            $data = [

                'nama' => Request()->nama,
                'email' => Request()->email,
                'jeniskelamin' => Request()->jk,
            ];
            $this->EditModel->updatedatadosen($id, $data);
        }
        return redirect()->route('datadosen')->with('Pesan', 'Data telah berhasil di ubah');
    }
}
