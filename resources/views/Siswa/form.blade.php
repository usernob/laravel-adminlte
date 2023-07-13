@extends('Layout.default.layout')
@section('title', 'Siswa')
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
                                    {{ str_starts_with(request()->route()->getName(),'siswa.add')? 'Tambah Data': 'Edit Data' }}
                                </h3>
                            </div>


                            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputNama">Nama</label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror" id="inputNama"
                                            placeholder="Masukkan Nama" value="{{ old('nama') ?? ($data->nama ?? '') }}">
                                        @error('nama')
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
                                        <label for="inputAlamat">Alamat</label>
                                        <input type="text" name="alamat"
                                            class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat"
                                            placeholder="Masukkan Alamat"
                                            value="{{ old('alamat') ?? ($data->alamat ?? '') }}">
                                        @error('alamat')
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
                                        <label for="inputTelp">No Telp</label>
                                        <input type="tel" name="no_telp"
                                            class="form-control @error('no_telp') is-invalid @enderror" id="inputTelp"
                                            placeholder="Masukkan No telp"
                                            value="{{ old('no_telp') ?? ($data->no_telp ?? '') }}">
                                        @error('no_telp')
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
                                        <label for="inputFoto">Foto</label>
                                        @if (isset($data->foto))
                                            <a href="{{ asset($data->foto) }}" target="_blank">Foto sebelumnya</a>
                                        @endif
                                        <div class="input-group @error('foto') is-invalid @enderror">
                                            <div class="custom-file">
                                                <input type="file" name="foto"
                                                    class="custom-file-input @error('foto') is-invalid @enderror"
                                                    id="inputFoto">
                                                <label class="custom-file-label" for="inputFoto">Pilih Foto</label>
                                            </div>
                                        </div>
                                        @error('foto')
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
                                        <label>Mengikuti Program</label>
                                        @php
                                            $index = old('program_id') ?? ($data->program_id ?? '');
                                        @endphp
                                        <select class="form-control" name="program_id">
                                            @foreach ($programs as $program)
                                                <option value="{{ $program->id }}"
                                                    @if ($index == $program->id) selected="selected" @endif>
                                                    {{ $program->nama_program }} ------ Rp @format($program->harga_program)
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('program_id')
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
                                        <label for="inputSertifikat">Pdf Sertifikat</label>
                                        @if (isset($data->pdf_sertifikat))
                                            <a href="{{ asset($data->pdf_sertifikat) }}" target="_blank">File
                                                sebelumnya</a>
                                        @endif
                                        <div class="input-group @error('pdf_sertifikat') is-invalid @enderror">
                                            <div class="custom-file">
                                                <input type="file" name="pdf_sertifikat"
                                                    class="custom-file-input @error('pdf_sertifikat') is-invalid @enderror"
                                                    id="inputSertifikat">
                                                <label class="custom-file-label" for="inputSertifikat">Pilih
                                                    Sertifikat</label>
                                            </div>
                                        </div>
                                        @error('pdf_sertifikat')
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
                                    <div class="form-group">
                                        <label for="inputNilai">Pdf Nilai</label>
                                        @if (isset($data->pdf_nilai))
                                            <a href="{{ asset($data->pdf_nilai) }}" target="_blank">File sebelumnya</a>
                                        @endif
                                        <div class="input-group @error('pdf_nilai') is-invalid @enderror">
                                            <div class="custom-file">
                                                <input type="file" name="pdf_nilai"
                                                    class="custom-file-input @error('pdf_nilai') is-invalid @enderror"
                                                    id="inputNilai">
                                                <label class="custom-file-label" for="inputNilai">Pilih Pdf Nilai</label>
                                            </div>
                                        </div>
                                        @error('pdf_nilai')
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

@push('scripts')
    <script>
        const inputElm = [
            "inputFoto",
            "inputSertifikat",
            "inputNilai",
        ]
        inputElm.forEach(elm => {
            document.getElementById(elm).onchange = function() {
                document.querySelector(`label[class='custom-file-label'][for='${elm}']`)
                    .innerHTML = this.files[0].name;
            };
        })
    </script>
@endpush
