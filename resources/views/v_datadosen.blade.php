@extends ('home')
@section('title', 'Admin')
@section('header', 'Data Dosen')
@section('isicontent')

<!-- table dosen -->
<a href="/admin/adddosen" type="button" class="btn btn-primary">Tambah Data</a><br>
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
      @endforeach
    </tr>
  </tbody>
</table>
@endsection