@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1 class="w-100">Destination</h1>
    {{-- <h4 class="w-100">Table Destination</h4> --}}
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
        <span class="text">+ Create New</span>
    </button>
</div>
<div class="section-body">
    <h2 class="section-title">Destination</h2>
    <p class="section-lead">
        Menu 'Destination' digunakan untuk mengatur data yg ada di halaman user
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Destination</h4>
                 
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-info"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Desc</th>
                          <th>Img</th>
                          <th>Harga</th>
                          <th>No Telp Outlet</th>
                          <th>Opsi</th>
                        </tr>
                        @php
                        $no =1;
                        @endphp
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td >{{$data->nama_kota}}</td>
                            <td>{{$data->description}}</td>
                            <td>
                                <img src="/storage/image/{{$data->image}}"
                                    style="max-width: 15vw; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 2px; margin:5px; padding:0.25rem; border:1px solid #dee2e6; ">
                            </td>
                            <td>{{$data->harga}}</td>
                            <td>0{{$data->no_telp_outlet}}</td>
                            <td>
                                <form action="/admin/destinations/delete/{{$data->id}}" method="POST"
                                    onsubmit="return confirm('mau ngapus?');">
                                    <span><a class="btn btn-warning"
                                            href="/admin/destinations/edit/{{$data->id}}"><i
                                                class="far fa-edit"></i>Edit</a></span>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit"><i
                                            class="far fa-trash-alt"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('modal')
<!-- Modal -->

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Form Input Destinasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/destinations/submit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Kota <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="nama_kota" required>
                    </div>
                    <div class="form-group">
                        <label>Description <span style="color: red">*</span></label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image <span style="color: red">*</span></label>
                        <input type="file" accept=".jpg, .jpeg, .png" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label>Harga <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp Outlet <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="no_telp_outlet" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
