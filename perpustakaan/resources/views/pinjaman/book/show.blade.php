@extends('pinjaman.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-tooltip-plus-outline"></i>
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
    <div class="container">
      <br>
      <br>
      <!-- <a class="btn btn-primary" href="../kartu/list_vendor.php" role="button">Kartu</a> -->
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Isbn</th>
                    <th>Stok</th>
                    <th>Data dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light text-uppercase">
                        <td> {{ $book->id }}</td>
                        <td> {{ $book->title }}</td>
                        <td> {{ $book->isbn }}</td>
                        <td> {{ $book->stok }}</td>
                        <td> {{ $book->created_at }}</td>
             </tr>
            </tbody>
        </table>  
        </div>
  </div>
@endsection