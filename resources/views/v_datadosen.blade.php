@extends ('home')
@section('title', 'Admin')
@section('header', 'Data Dosen')
@section('isicontent')

@if (session('Pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>Berhasil !</h5>
    {{ (session('Pesan')) }}.
</div>
@endif

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              {{-- untuk tombol tambah data --}}
              <a href="/admin/adddosen" type="button" class="btn btn-primary md-3">Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jenis Kelamin</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jenis Kelamin</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                  <?php $no = 1; ?>
                     @foreach ($dosen as $data)
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                      <td>{{$data->nama}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->jeniskelamin}}</td>
                      <td><img src="{{ url('foto/' .$data->foto) }}" width="80px"></td>
                      <td>
                        <a href="/admin/editdosen/{{$data->id}}" class="btn btn-sm btn-warning"> Edit </a>
                        <a href="/admin/deletedosen/{{$data->id}}" class="btn btn-sm btn-danger"> Delete </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  @endsection