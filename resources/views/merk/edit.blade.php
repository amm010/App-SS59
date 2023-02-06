@extends('layouts.master')
@section('judul'.'Edit Data Merk ')
@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Edit Data Merk</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="-">Data Merk</a></li>
                <li class="breadcrumb-item active">Edit Data Merk</li>
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
            <form method="POST" action="/Merk/{{$Merk->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kode</label>
                  <input type="text" name="kode" readonly value="{{$Merk->kode}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Merk</label>
                    <input type="text" name="merk" value="{{$Merk->nm_merk}}" class="form-control" id="exampleInputEmail1">
                  </div>
                  <button type="submit" class="btn btn-primary">Edit Data</button>
              </form>
        </div>

    </section>
@endsection