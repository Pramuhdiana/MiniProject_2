@extends ('home')
@section('title', 'Home')
@section('header', 'Profile')
@section ('isicontent')
@if ( Str::length(Auth::guard('user')->user()) > 0)
<h2>Selamat Datang Admin</h2>
@endif

@if (session('Pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>Berhasil !</h5>
    {{ (session('Pesan')) }}.
</div>
@endif
        @if ( Str::length(Auth::guard('dosen')->user()) > 0)
        <div class="card mb-8 style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
        <img src="{{ url('foto/' .Auth::guard('dosen')->user()->foto) }}" class="card-img" alt="...">
    </div>
        @elseif ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
        <div class="card mb-8 style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
        <img src="{{ url('foto/' .Auth::guard('mahasiswa')->user()->foto) }}" class="card-img" alt="...">
    </div>
        @endif
      <div class="col-md-8">
        <div class="card-body">
            @if ( Str::length(Auth::guard('dosen')->user()) > 0)
            <h5 class="card-title">{{ Auth::guard('dosen')->user()->nama }}</h5>
            <p class="card-text">Email         : {{ Auth::guard('dosen')->user()->email }}</p>
            <p class="card-text">Jenis Kelamin : {{ Auth::guard('dosen')->user()->jeniskelamin }}</p>
            <p class="card-text"><small class="text-muted">Level Anda {{ Auth::guard('dosen')->user()->level }}</small></p>
            <a href="/user/doseneditakun/{{ Auth::guard('dosen')->user()->id }}" class="btn btn-warning">Edit Akun</a>
            <a href="/user/dosenedit/{{ Auth::guard('dosen')->user()->id }}" class="btn btn-primary">Ganti Password</a>

            @elseif ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
            <h5 class="card-title">{{ Auth::guard('mahasiswa')->user()->nama }}</h5>
            <p class="card-text">Jurusan         : {{ Auth::guard('mahasiswa')->user()->jurusan }}</p>
            <p class="card-text">Email         : {{ Auth::guard('mahasiswa')->user()->email }}</p>
            <p class="card-text">Jenis Kelamin : {{ Auth::guard('mahasiswa')->user()->jeniskelamin }}</p>
            <p class="card-text">Wali Dosen Anda  : {{ Auth::guard('mahasiswa')->user()->wali }}</p>
            <p class="card-text"><small class="text-muted">Level Anda {{ Auth::guard('mahasiswa')->user()->level }}</small></p>
            <a href="/user/editakun/{{ Auth::guard('mahasiswa')->user()->id }}" class="btn btn-warning
              ">Edit Akun</a>
            <a href="/user/editmahasiswa/{{ Auth::guard('mahasiswa')->user()->id }}" class="btn btn-primary">Ganti Password</a>
            @endif
        </div>
      </div>
    </div>
  </div>

@endsection