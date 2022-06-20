@extends ('home')
@section('title', 'Admin')
@section('header', 'Data Dosen')
@section('isicontent')

<!-- table dosen -->
{{-- untuk tombol tambah data --}}
<a href="/admin/adddosen" type="button" class="btn btn-primary md-3">Tambah Data</a>
<form action="/admin/caridosen" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-2 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input type="text" name="cari" id="cari" value="{{ old('cari') }}" class="form-control bg-light border-0 small" placeholder="Search Name" aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">
        <i class="fas fa-search fa-sm"></i>
      </button>
      {{-- bisa juga menggunakan input type submit --}}
      {{-- <input type="submit" class="btn btn-primary" value="CARI"> --}}
    </div>
  </div>
</form>
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
      <th scope="col">Jeni Kelamin</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      @foreach ($dosen as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->nama}}</td>
      <td>{{$data->jeniskelamin}}</td>
      <td><img src="{{ url('foto/' .$data->foto) }}" width="80px"></td>
      <td>
                <a href="/admin/editdosen/{{$data->id}}" class="btn btn-sm btn-warning"> Edit </a>
                <a href="/admin/deletedosen/{{$data->id}}" class="btn btn-sm btn-danger"> Delete </a>
              </td>
              {{-- cek dahulu cssnya tapi nanti ya --}}
              {{-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
                </div> --}}
      @endforeach
    </tr>
  </tbody>
</table>
@endsection