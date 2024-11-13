@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1>DataTables</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Modules</a></div>
        <div class="breadcrumb-item">DataTables</div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">DataTables</h2>
    <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a
            href="https://datatables.net/">here</a>.
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Basic DataTables</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                        <span class="text">+ Create</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="destinasi">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Nama Kota</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Harga</th>
                                    <th>No Telp Outlet</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- data ngelooping di bawah --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#destinasi').DataTable({
            // responsive: true,
            processing: true,
            ordering: false,
            serverSide: true,
            ajax: {
                url: '{{ url()->current() }}',
            },
            columns: [{
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                },
                {
                    data: "nama_kota",
                },
                {
                    data: "description",
                },
                {
                    data: 'image',
                    render: function (data) {
                        return '<img src="/storage/image/' + data + '" style="max-width: 15vw; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 2px; margin:5px; padding:0.25rem; border:1px solid #dee2e6; ">';
                    },
                },
                {
                    data: "harga",
                },
                {
                    data: "no_telp_outlet",
                },
                {
                    data: null,
                    render: function (data) {
                        var deleteUrl = '/admin/destinations/delete/' + data.id;
                        var editUrl = '/admin/destinations/edit/' + data.id;
                        return `
                        <form action="${deleteUrl}" method="POST" onsubmit="return confirm('mau ngapus?');">
                            <span><a class="btn btn-primary" href="${editUrl}"><i class="far fa-edit"></i>Edit</a></span>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                        `;
                    },
                },

            ],
        });

    });

</script>
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
                        <input type="file"  accept=".jpg, .jpeg, .png" class="form-control" name="image" required>
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
