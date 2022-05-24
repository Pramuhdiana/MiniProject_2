@extends ('home')
@section('title', 'Mahasiswa')
@section('header', 'Mencatat Data Perwalian')
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
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Nama Dosen Wali</th>
      <th scope="col">Catatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($mahasiswa as $data)
    <tr>
       <td>
         <div class="form-group col-md-8">
           <input type="text" class="form-control" id="nama" name="nama" placeholder="{{$data->nama}}" readonly>
          </div>
        </td> 
           <input type="text" class="form-control" id="jk" name="jk" placeholder="{{$data->jeniskelamin}}" readonly hidden>
           <input type="text" class="form-control" id="foto" name="foto" placeholder="{{$data->foto}}" readonly hidden>


  <td>
  <div class="form-group col-md-10">
           <input type="text" class="form-control" id="nama" name="nama" placeholder="{{$data->wali}}" readonly required>
           <div class="invalid-feedback">
      Hubungi Admin Untuk Menambahkan Dosen Wali
    </div>
          </div>
  </td>
  <td>
  <div class="mb-3">
    <textarea class="form-control" id="catatan" name="catatan" placeholder="{{$data->catatan}}" readonly></textarea>
  </div>
  </td>
  <td>
    <a href="/admin/catatan/{{$data->id}}" class="btn btn-sm btn-success"> Tambah Catatan </a>
          </td>

 
        @endforeach
    </tr>
  </tbody>
</table>
@endsection