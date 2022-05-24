@extends ('home')
@section('title', 'Admin')
@section('header', 'Data Mahasiswa')
@section('isicontent')

<!-- membuat table -->
<a href="/admin/addmahasiswa" type="button" class="btn btn-primary">Tambah Data</a><br>
@if (session('Pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>Berhasil !</h5>
    {{ (session('Pesan')) }}.

</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Email</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
      <th scope="col">Dosen Wali</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      @foreach ($mahasiswa as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->nama}}</td>
      <td>{{$data->jurusan}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->jeniskelamin}}</td>
      <td><img src="{{ url('foto/' .$data->foto) }}" width="80px"></td>
      <td>
      <!-- <a href="/admin/pilihwali/{{ $data->id }}" class="btn btn-sm btn-success"> Pilih Wali </a> -->
                <a href="/admin/editmahasiswa/{{ $data->id }}" class="btn btn-sm btn-warning"> Edit </a>
                <a href="/admin/deletemahasiswa/{{ $data->id }}" class="btn btn-sm btn-danger"> Delete </a>
            </td>
            <td>{{$data->wali}}</td>
        @endforeach
    </tr>
  </tbody>
</table>

@endsection