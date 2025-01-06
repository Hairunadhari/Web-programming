@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1 style="width:87%">Detail Transaksi</h1>
</div>
<div class="section-body">

    <div class="card">
        <div class="card-header">
            <h5>Detail Transaksi</h5>
        </div>
        <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Pemesan </label>
                    <input type="text" readonly value="Irwansyah Saputra" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>Email Pemesan </label>
                    <input type="text" readonly value="IrwansyahSaputra@gmail.com" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>No Telp Pemesan </label>
                    <input type="text" readonly value="081812718271" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>Total Harga </label>
                    <input type="text" readonly value="Rp 150.000" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Status Pembayaran </label>
                    <input type="text" readonly value="PAID" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Tanggal Keberangkatan </label>
                    <input type="date" readonly value="05-10-2024" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Kota Tujuan </label>
                    <input type="text" readonly value="Kerinci" class="form-control" name="harga">
                </div>
               
            </form>
        </div>
    </div>
</div>

@endsection
