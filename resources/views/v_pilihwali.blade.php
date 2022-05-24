@extends ('home')
@section('title', 'Admin')
@section('header', 'Pilih Wali')
@section('isicontent')

<!-- membuat table -->

<form action="/admin/updatewali/{{ $mahasiswa->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-50">
    <div class="form-group">
                    <label>nama</label>
                    <input name="nama" class="form-control" value="{{ $mahasiswa->nama }}" readonly>
    </div>
    <div class="form-group col-md-15">
                        <label>Pilih Wali</label>
                        <select class="custom-select" name="wali" id="wali" required>
                            @if($mahasiswa->wali <> "")
                            <option selected value={{ $mahasiswa->wali }}>
                            {{ $mahasiswa->wali }}
                        </option>
                            @else
                            <option selected value="">
                              ...
                            </option>
                            @endif
            @foreach($dosen as $datadosen)
            <option value="{{$datadosen->nama}}">{{$datadosen->nama}}</option>
            @endforeach
                        </select>
                </div>
               
                  </td>
                  <td>
                <div class="form-group">
                <button class="btn btn-primary"> Simpan </button>
                <a href="/admin/rekapdata" class="btn btn-sm btn-warning"> Kembali </a>
            </div>
            <div class="form-group">
                    <input name="jk" class="form-control" value="{{ $mahasiswa->jeniskelamin }}" readonly hidden>
    </div>
    <div class="form-group">
                    <img src="{{url('foto/'.$mahasiswa->foto)}}" width="150px" hidden>

               
            </div>
            </div>
        </div>
    </div>
        
</form>


@endsection