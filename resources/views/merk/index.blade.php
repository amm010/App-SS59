@extends('layouts.master')
@section('judul'.'Data Merk ')
@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Data Merk</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Merk</li>
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
                <a href="/Merk/form" class="btn btn-primary">Tambah Data</a>

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
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Merk as $item)
                    <tr>
                        <th scope="row">{{ $nomor++ }}</th>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nm_merk }}</td>
                        <td>
                            <a href="/Merk/edit/{{$item->id}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                      </tr>
                    @endforeach                
                </tbody>
              </table>
        </div>

    </section>
@endsection