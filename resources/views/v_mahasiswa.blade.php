@extends ('home')
@section('title', 'Mahasiswa')
@section('header', 'Menambahkan Catatan Data Perwalian')
@section('isicontent')


<!-- membuat table -->
@if (session('Pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>Berhasil !</h5>
    {{ (session('Pesan')) }}.
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Nama Dosen Wali</th>
      <th scope="col">Catatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <td>
         <div class="form-group col-md-10">
           <input type="text" class="form-control" id="nama" name="nama" placeholder="{{ Auth::guard('mahasiswa')->user()->nama }}" readonly>
          </div>
        </td> 
       <td>
         <div class="form-group col-md-10">
           <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="{{ Auth::guard('mahasiswa')->user()->jurusan }}" readonly>
          </div>
        </td> 
  <td>
  <div class="form-group col-md-10">
           <input type="text" class="form-control" id="wali" name="wali" placeholder="{{ Auth::guard('mahasiswa')->user()->wali }}" readonly required>
           <div class="invalid-feedback">
      Hubungi Admin Untuk Menambahkan Dosen Wali
    </div>
          </div>
  </td>
  <td>
  <div class="mb-3">
    <textarea class="form-control" id="catatan" name="catatan" placeholder="" readonly></textarea>
  </div>
  </td>
  </td>
      <td>
      <a href="/mahasiswa/catatan/{{ Auth::guard('mahasiswa')->user()->id }}" class="btn btn-sm btn-success"> Tambah Catatan </a>
            </td>

    </tr>
  </tbody>
</table>
@endsection