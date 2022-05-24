@extends ('home')
@section('title', 'Mahasiswa')
@section('header', 'Mencatat Data Perwalian')
@section('isicontent')


<!-- membuat table -->
<form action="/mahasiswa/addcatatan/{{ $mahasiswa->id }}" method="POST" enctype="multipart/form-data">
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
           <input type="text" class="form-control" id="jk" name="jk" placeholder="{{$mahasiswa->jeniskelamin}}" value="{{$mahasiswa->jeniskelamin}}" readonly hidden>
           <input type="text" class="form-control" id="level" name="level" placeholder="{{$mahasiswa->level}}" value="{{$mahasiswa->level}}" readonly hidden>
           <input type="text" class="form-control" id="email" name="email" placeholder="{{$mahasiswa->email}}" value="{{$mahasiswa->email}}" readonly hidden>
           <input type="text" class="form-control" id="password" name="password" placeholder="{{$mahasiswa->password}}" value="{{$mahasiswa->password}}" readonly hidden>
           <input type="text" class="form-control" id="foto" name="foto" placeholder="{{$mahasiswa->foto}}" value="{{$mahasiswa->foto}}" readonly hidden>


  <td>
  <div class="form-group col-md-10">
           <input type="text" class="form-control @error('wali') is-invalid @enderror " id="wali" name="wali" placeholder="{{$mahasiswa->wali}}" value="{{$mahasiswa->wali}}" readonly required>
           <!-- @error('wali')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->
           <div class="invalid-feedback">
      Hubungi Admin Untuk Menambahkan Dosen Wali
    </div>
          </div>
  </td>
  <td>
  <div class="mb-3">
    <textarea class="form-control" id="catatan" name="catatan" placeholder="{{$mahasiswa->catatan}}" ></textarea>
  </div>
  </td>
  </td>
      <td>
      <div class="form-group">
                <button class="btn btn-success"> Simpan Catatan</button>
            </div>
            <a href="/mahasiswa" class="btn btn-sm btn-warning"> Kembali </a>
            </td>
    </tr>
  </tbody>
</table>
        
</form>
@endsection