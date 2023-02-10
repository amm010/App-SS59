@extends('layouts.master')
@section('judul'.'Edit Data Barang ')
@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Edit Data Barang</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="-">Data Barang</a></li>
                <li class="breadcrumb-item active">Edit Data Barang</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection  

@section('content')

    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
                </div>
            </div>
        <div class="card-body">
            <form method="POST" action="/DataBarang/{{$brg->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode</label>
                    <input type="text" value="{{$brg->kode}}" name="kode" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                      <input type="text" value="{{$brg->nm_barang}}" name="nama_brg" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Harga</label>
                      <input type="text" value="{{$brg->harga}}" name="harga" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Merk</label>
                      <select name="merk" class="form-control" id="">
                          <option value="">--Pilih Merk--</option>
                          @foreach ($Merk as $data)
                              <option value="{{ $data->id }}" {{ $brg->merks_id == $data->id ? "selected" : "" }}>{{ $data->kode }} - {{ $data->nm_merk }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kategori</label>
                      <select name="kategori" class="form-control" id="">
                          <option value="">--Pilih Kategori--</option>
                          @foreach ($Kategori as $ktg)
                              <option value="{{ $ktg->id }}" {{ $brg->kategoris_id == $ktg->id ? "selected" : "" }}>{{ $ktg->kode }} - {{ $ktg->nm_kategori }}</option>
                          @endforeach
                      </select>
                  </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>

    </section>
@endsection