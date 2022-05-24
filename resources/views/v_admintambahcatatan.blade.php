@extends ('home')
@section('title', 'Admin')
@section('header', 'Menambahkan Catatan')
@section('isicontent')


<!-- membuat table -->
<form action="/admin/addcatatan/{{ $mahasiswa->id }}" method="POST" enctype="multipart/form-data">
    @csrf
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
           <input type="text" class="form-control" id="nama" name="nama" placeholder="{{$mahasiswa->nama}}" value="{{$mahasiswa->nama}}" readonly>
          </div>
        </td> 
       <td>
         <div class="form-group col-md-10">
           <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="{{$mahasiswa->jurusan}}" value="{{$mahasiswa->jurusan}}" readonly>
          </div>
        </td> 

  <td>
<div class="form-group col-md-15">
    <select class="custom-select" @error('wali') is-invalid @enderror name="wali" id="wali" required>
        <option selected>{{$mahasiswa->wali}}</option>
        @foreach($dosen as $datadosen)
        <option value="{{$datadosen->nama}}">{{$datadosen->nama}}</option>
        @endforeach
    </select></div>
      <!-- @error('wali')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->
<div class="invalid-feedback">
    Wajib Di isi
  </div>
  </td>
  <td>
  <div class="mb-3">
    <textarea class="form-control" @error('wali') is-invalid @enderror id="catatan" name="catatan" placeholder="{{$mahasiswa->catatan}}" required ></textarea>
  </div>
    <!-- @error('wali')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->
<div class="invalid-feedback">
    Wajib Di isi
  </div>
  </td>
  </td>
      <td>
      <div class="form-group">
                <button class="btn btn-success"> Simpan Catatan</button>
            </div>
            <a href="/admin/dataperwalian" class="btn btn-sm btn-warning"> Kembali </a>
            </td>
    </tr>
  </tbody>
</table>
        
</form>
@endsection