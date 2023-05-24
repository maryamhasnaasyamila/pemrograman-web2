@extends('admin.layout.anggota')
@section('content')
        <div class="content-wrapper">
            <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-account-group"></i>
            </span> Daftar Anggota
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
            <a href="" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i>  Tambah Anggota</a>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                    <h4 class="card-title">Daftar Anggota Perpustakaan</h4>
                      <thead class="table-success">
                        <tr>
                          <th> No </th>
                          <th> Nama Anggota </th>
                          <th> Jenis Kelamin </th>
                          <th> Semester </th>
                          <th> Total Peminjaman </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Ningning </td>
                          <td> Perempuan </td>
                          <td> 3 </td>
                          <td> 2 buku </td>
                          <td>
                            <a href="" class="btn btn-sm btn-info">View</a>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection