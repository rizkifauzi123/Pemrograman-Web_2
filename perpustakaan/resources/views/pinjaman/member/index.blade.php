@extends('pinjaman.layout.index')
@section('members')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-account-plus"></i>
        </span> Daftar Members 
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
      <a class="btn btn-success" href="#" role="button">+ Tambah Members</a>
      <br>
      <br>
      <!-- <a class="btn btn-primary" href="../kartu/list_vendor.php" role="button">Kartu</a> -->
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Addres</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($members as $member)
                    <tr class="table-light text-uppercase">
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $member->name }}</td>
                        <td> {{ $member->email }}</td>
                        <td> {{ $member->gender }}</td>
                        <td> {{ $member->status }}</td>
                        <td> {{ $member->address }}</td>
                        <td>
    <a class="btn btn-primary" href="#?id=">View</a>
    <a class="btn btn-warning" href="#?idedit=">Edit</a>
    <a class="btn btn-danger" href="#?iddel="
    onclick="if(!confirm('Anda Yakin Hapus Data Kartu?')) {return false}"
    >Delete</a>
    </td>
    </tr>
    @endforeach
            </tbody>
        </table>  
        </div>
  </div>
@endsection