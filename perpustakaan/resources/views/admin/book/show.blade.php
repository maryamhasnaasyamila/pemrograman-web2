@extends('admin.layout.buku')
@section('content')
        <div class="content-wrapper">
            <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-book"></i>
            </span> Detail Buku
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
            <a href="/dashboard/book" class="btn btn-sm btn-primary"><i class="mdi mdi-arrow-left"></i>  Back</a>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      @if (session('succes'))
                        <div class="alert alert-success">
                          {{ session('succes') }}
                        </div>
                        <meta http-equiv="refresh" content="3;url=/dashboard/book">
                      @endif
                    <h4 class="card-title">Detail Buku</h4>
                      <thead class="table-success">
                        <tr>
                          <th> ID </th>
                          <th> Judul Buku </th>
                          <th> Jumlah Tersedia </th>
                          <th> No. ISBN </th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <td> {{ $book->id }} </td>
                              <td> {{ $book->title }} </td>
                              <td> {{ $book->stok }} </td>
                              <td> {{ $book->isbn }} </td>
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection