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
      <a href="{{url ('/tampilan/book/create') }}" class="btn btn-success" role="button">+ Tambah Buku</a>
      <br>
      <br>
      <!-- <a class="btn btn-primary" href="../kartu/list_vendor.php" role="button">Kartu</a> -->
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isbn</th>
                    <th>Jumlah tersedia</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($books as $book)
                    <tr class="table-light text-uppercase">
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $book->title }}</td>
                        <td> {{ $book->isbn }}</td>
                        <td> {{ $book->stok }}</td>
                        <td>
    <a class="btn btn-primary" href="#?id=">View</a>
    <a class="btn btn-warning" href="#?idedit=">Edit</a>
    <form action="{{ url('/tampilan/book/destroy', $book->id) }}" method="post" class="d-inline">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Hapus Daftar Buku?')) {return false}"
    >Hapus</button>
    </form>
    </td>
    </tr>
    @endforeach
            </tbody>
        </table>  
        </div>
  </div>
@endsection