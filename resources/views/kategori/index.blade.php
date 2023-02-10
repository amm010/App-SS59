@extends('layouts.master')
@section('judul'.'Data Kategori')
@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Data Kategori</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Kategori</li>
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
                <a href="/Kategori/form" class="btn btn-primary">Tambah Data</a>

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
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Kategori as $item)
                    <tr>
                        <th scope="row">{{ $nomor++ }}</th>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nm_kategori }}</td>
                        <td>
                            <a href="/Kategori/edit/{{$item->id}}" class="btn btn-sm btn-info">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                Hapus
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yakin data kategori {{ $item->nm_kategori }} ingin dihapus?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        <form action="/Kategori/{{ $item->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                    @endforeach                
                </tbody>
              </table>
        </div>

    </section>
@endsection