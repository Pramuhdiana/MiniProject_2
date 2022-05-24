@extends ('home')
@section('title', 'Admin')
@section('header', 'Edit Data Dosen')
@section('isicontent')

<form action="/admin/updatedosen/{{ $dosen->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <td>
         <div class="form-group col-md-25">
           <input type="text" class="form-control" id="nama" name="nama" placeholder="{{$dosen->nama}}" value="{{$dosen->nama}}">
          </div>
        </td> 
       <td>
         <div class="form-group col-md-35">
           <input type="text" class="form-control" id="email" name="email" placeholder="{{$dosen->email}}" value="{{$dosen->email}}">
          </div>
        </td> 
       <td>
         <div class="form-group col-md-15">
            <select class="custom-select" name="jk" id="jk">
                <option value="{{$dosen->jeniskelamin}}">{{$dosen->jeniskelamin}}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select></div>
        </td> 
       <td>
         <div class="form-group col-md-10">
            <img src="{{ url('foto/' .$dosen->foto) }}" width="80px">
 <input type="file" class="form-control-file" name="foto" id="foto" value="" >

          </div>
        </td> 
    </tr>
</tbody>
</table>
<div class="form-group col-md-6">
    <button class="btn btn-success">Simpan</button>
    <a href="/admin/datadosen" class="btn btn-sm btn-warning"> Kembali </a>
</div>
        
</form>

@endsection