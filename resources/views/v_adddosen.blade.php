@extends ('home')
@section('title', 'Admin')
@section('header', 'Tambah Data Dosen')
@section('isicontent')


<form action="/admin/tambah" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group col-md-6">
      <label for="nama">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
</div>
<div class="form-group col-md-6">
      <input type="text" name="level" class="form-control" id="level" value="dosen" readonly hidden>
</div>
<div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
</div>
<div class="form-group col-md-6">
      <label for="password">password</label>
      <input type="password" name="password" class="form-control" id="password" value="">
</div>
<div class="form-group col-md-6">
    <label for="jk">Jenis Kelamin</label>
        <select class="custom-select" name="jk" id="jk">
            <option value="">...</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
  </div>

   <div class="form-group col-md-6">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1" value="{{ old('foto') }}">
  </div>
  <div class="form-group col-md-6">
                    <button class="btn btn-primary">Simpan</button>
                    <a href="/admin/datadosen" class="btn btn-sm btn-warning"> Kembali </a>
                </div>
</form>


@endsection
