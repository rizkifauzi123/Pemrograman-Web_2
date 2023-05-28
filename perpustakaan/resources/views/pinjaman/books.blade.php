@extends('pinjaman.layout.index')
@section('books')
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
      <a class="btn btn-success" href="#" role="button">+ Tambah Buku</a>
      <br>
      <br>
      <!-- <a class="btn btn-primary" href="../kartu/list_vendor.php" role="button">Kartu</a> -->
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Jumlah tersedia</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <tr class="table-light text-uppercase">
                        <td>1</td>
                        <td>Cintaku Cintamu</td>
                        <td>112</td>
                        <td>
    <a class="btn btn-primary" href="#?id=">View</a>
    <a class="btn btn-warning" href="#?idedit=">Edit</a>
    <a class="btn btn-danger" href="#?iddel="
    onclick="if(!confirm('Anda Yakin Hapus Data Kartu?')) {return false}"
    >Delete</a>
    </td>
    </tr>
            </tbody>
        </table>  
        </div>
  </div>
@endsection