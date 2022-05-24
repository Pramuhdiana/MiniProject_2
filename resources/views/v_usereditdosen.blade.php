@extends ('home')
@section('title', 'Dosen')
@section('header', 'Edit Akun')
@section('isicontent')

<form action="/user/updatedosen/{{ $dosen->id }}" method="POST" enctype="multipart/form-data">
  @csrf
      <div class="col-md-8">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="email" readonly name="email" placeholder="{{$dosen->email}}" value="{{$dosen->email}}" >
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label" >Password</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="password" name="password" value="" >
          </div>
        </div>

      </div>
    </div>
      </div>
  
      <div class="form-group col-md-6">
        <button class="btn btn-success">Simpan</button>
        <a href="/" class="btn btn-sm btn-warning"> Kembali </a>
    </div>
            
  
</form>
@endsection