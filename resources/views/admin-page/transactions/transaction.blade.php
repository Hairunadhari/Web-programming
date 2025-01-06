@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1>Transactions</h1>
    
</div>
<div class="section-body">
    <h2 class="section-title">Transactions</h2>
    <p class="section-lead">
        Menu 'Transactions' untuk melihat data transaksi setiap user
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Transaction</h4>
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
                                <th>Nama Pemesan</th>
                                <th>Email Pemesan</th>
                                <th>Total Harga</th>
                                <th>Status Pembayaran</th>
                                {{-- <th>Tgl Keberangkatan</th> --}}
                                {{-- <th>Kota Tujuan</th> --}}
                                {{-- <th>No Telp Pemesan</th> --}}
                                <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>@Irwansyah.com</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">PAID</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Hasan Basri</td>
                          <td>Hasan@gmail.com</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">PAID</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kusnadi</td>
                          <td>Kusnadi@co.id</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-warning">PENDING</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rizal Fakhri</td>
                          <td>RizalFakhri@gmail.com</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-danger">FAILED</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Isnap Kiswandi</td>
                          <td>IsnapKiswandi@gmail.com</td>
                          <td>2017-01-17</td>
                          <td><div class="badge badge-success">PAID</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Irwansyah Saputra</td>
                          <td>IrwansyahSaputra@gmail.com</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-warning">PENDING</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Hasan Basri</td>
                          <td>Hasan@gmail.com</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">PAID</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>Kusnadi</td>
                          <td>Kusnadi@co.id</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-warning">PENDING</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>Rizal Fakhri</td>
                          <td>RizalFakhri@gmail.com</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-danger">FAILED</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Isnap Kiswandi</td>
                          <td>IsnapKiswandi@gmail.com</td>
                          <td>2017-01-17</td>
                          <td><div class="badge badge-success">PAID</div></td>
                          <td><a href="/admin/transactions/detail" class="btn btn-dark">Detail</a></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection