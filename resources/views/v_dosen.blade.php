@extends ('home')
@section('title', 'Dosen')
@section('header', 'Histori Data Perwalian')
@section('isicontent')

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
      <th scope="col">Catatan</th>
      @if ( Str::length(Auth::guard('user')->user()) > 0)
@if (Auth::guard('user')->user()->level = "admin")
      <th scope="col">Aksi</th>
      @endif
      @endif
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      @foreach ($riwayat as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->nama_mhs}}</td>
      <td>{{$data->nama_dosen}}</td>
      {{-- <td>{{$data->catatan}}</td> --}}
      <td>  <div class="mb-3">
        <textarea class="form-control" id="catatan" name="catatan" placeholder="{{$data->catatan}}" readonly></textarea>
      </div></td>
      @if ( Str::length(Auth::guard('user')->user()) > 0)
@if (Auth::guard('user')->user()->level = "admin")
      <td>
        <a href="/admin/deletehistori/{{$data->id}}" class="btn btn-sm btn-danger"> Delete </a>
    </td>
    @endif
      @endif
        @endforeach
    </tr>

  </tbody>
</table>
@endsection