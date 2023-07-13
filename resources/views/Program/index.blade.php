@extends('Layout.table.layout')
@section('title', 'Program')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Program</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Program</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span> {{ session('success') }} </span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span> {{ session('error') }} </span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modalAddData">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="table-user" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Program</th>
                                            <th>Harga Program</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($program as $item)
                                            <tr>
                                                <td></td>
                                                <td>{{ $item->nama_program }}</td>
                                                <td>Rp @format($item->harga_program)</td>
                                                <td>
                                                    <a href="{{ route('program.edit', $item->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('program.destroy', $item->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Program</th>
                                            <th>Harga Program</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="modalAddData" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="modalAddDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="modalAddDataLabel"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <div class="row align-items-center justify-content-center">
                        <div class="col col-12 col-md-3 d-flex justify-content-center">
                            <i class="fas fa-exclamation-triangle align-self-center p-4" style="font-size: 3.5rem"></i>
                        </div>
                        <h5 class="col col-12 col-md-6 m-0 text-center">
                            Apakah Kamu Yakin Ingin Menambah Data?
                        </h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Tutup
                    </button>
                    <a href="{{ route('program.add') }}" type="button" class="btn btn-primary">
                        Ya Saya Yakin
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
