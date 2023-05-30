@extends('admin.layout.buku')
@section('content')
        <div class="content-wrapper">
            <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-book"></i>
            </span> Daftar Buku
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
            <a href="" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i>  Tambah Data</a>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                    <h4 class="card-title">Daftar Buku Tersedia</h4>
                      <thead class="table-success">
                        <tr>
                          <th> No </th>
                          <th> Judul Buku </th>
                          <th> Jumlah Tersedia </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach ($books as $book)
                            <tr>
                                
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $book->title }} </td>
                              <td> {{ $book->stok }} </td>
                              <td>
                                  <a href="" class="btn btn-sm btn-info">View</a>
                                  <a href="" class="btn btn-sm btn-warning">Edit</a>
                                  <a href="" class="btn btn-sm btn-danger">Delete</a>
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
@endsection