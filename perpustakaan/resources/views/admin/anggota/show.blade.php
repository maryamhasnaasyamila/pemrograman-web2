@extends('admin.layout.anggota')
@section('content')
        <div class="content-wrapper">
            <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-account-group"></i>
            </span> Detail Anggota
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
            <a href="/dashboard/anggota" class="btn btn-sm btn-primary"><i class="mdi mdi-arrow-left"></i>  Back</a>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                         @if (session('succes'))
                        <div class="alert alert-success">
                          {{ session('succes') }}
                        </div>
                        <meta http-equiv="refresh" content="3;url=/dashboard/anggota">
                      @endif
                    <h4 class="card-title">Detail Anggota</h4>
                      <thead class="table-info">
                        <tr>
                          <th> ID </th>
                          <th> Nama Anggota </th>
                          <th> Email </th>
                          <th> Gender </th>
                          <th> Status </th>
                          <th> Alamat </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> {{ $members->id }} </td>
                          <td> {{ $members->name }} </td>
                          <td> {{ $members->email }} </td>
                          <td> {{ $members->gender }} </td>
                          <td> {{ $members->status }} </td>
                          <td> {{ $members->address }} </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection