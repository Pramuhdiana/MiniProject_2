@extends ('home')
@section('title', 'Admin')
@section('header', 'Rekap Data Perwalian')
@section('isicontent')


<!-- membuat table -->
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
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Nama Dosen Wali</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      @foreach ($mahasiswa as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->nama}}</td>
      <td>{{$data->wali}}</td>
      <td>
        @if($data->wali <> "")
          <a href="/admin/pilihwali/{{ $data->id }}" class="btn btn-sm btn-warning"> Edit Wali </a>
        @else
        <a href="/admin/pilihwali/{{ $data->id }}" class="btn btn-sm btn-success"> Pilih Wali </a>
@endif
     

      
      
      </td>
 
        @endforeach
    </tr>
  </tbody>
</table>
@endsection