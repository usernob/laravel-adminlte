@extends('Layout.table.layout')
@section('title', 'Program')
@section('content')

    <div class="content-wrapper">
        <div class="content-header"></div>
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ str_starts_with(request()->route()->getName(),'program.add')? 'Tambah Data': 'Edit Data' }}
                                </h3>
                            </div>


                            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputNama">Nama Program</label>
                                        <input type="text" name="nama_program"
                                            class="form-control @error('nama_program') is-invalid @enderror" id="inputNama"
                                            placeholder="Masukkan Nama Program"
                                            value="{{ old('nama_program') ?? ($data->nama_program ?? '') }}">
                                        @error('nama_program')
                                            <div class="alert alert-danger alert-dismissible invalid-feedback fade show"
                                                role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputHarga">Harga Program</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" name="harga_program"
                                                class="form-control @error('harga_program') is-invalid @enderror"
                                                id="inputHarga" placeholder="Masukkan Nama Program"
                                                value="{{ old('harga_program') ?? ($data->harga_program ?? '') }}">
                                            @error('harga_program')
                                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show"
                                                    role="alert">
                                                    {{ $message }}
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
