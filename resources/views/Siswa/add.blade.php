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
                                <h3 class="card-title">Quick Example</h3>
                            </div>


                            <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputNama">Nama</label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror" id="inputNama"
                                            placeholder="Masukkan Nama" value="{{ old('nama') }}">
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
                                            placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
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
                                            placeholder="Masukkan No telp" value="{{ old('no_telp') }}">
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
                                            $programs = ['Kuliah Digital Marketing 1 Tahun', 'Kursus Singkat Digital Marketing 6 Hari Bersertifikat BNSP', 'In House Training Digital Marketing', 'Kursus Google Ads', 'Kursus TikTok Ads', 'Kursus Intensif SEO', 'Kursus WordPress', 'Kursus Pemrograman Laravel', 'Kursus Konten Kreator', 'Kursus Desain Grafis', 'Kursus Intensif Fotografi Untuk Pemasaran Digital', 'Kursus Intensif Videografi Untuk Pemasaran Digital', 'Kursus FB Ads', 'Paket Kursus FB Ads, Google Ads, SEO', 'Paket Kursus Fb Ads, Google Ads, SEO, WordPress'];
                                            $index = array_search(old('mengikuti_program'), $programs);
                                        @endphp
                                        <select class="form-control" name="mengikuti_program">
                                            @foreach ($programs as $program)
                                                <option @if ($index == $loop->index) selected @endif>
                                                    {{ $program }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputHarga">Harga Program</label>
                                        <input type="text" name="harga_program"
                                            class="form-control @error('harga_program') is-invalid @enderror"
                                            id="inputHarga" placeholder="Masukkan Harga Program"
                                            value="{{ old('harga_program') }}">
                                        @error('harga_program')
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
                                        <div class="input-group @error('pdf_sertifikat') is-invalid @enderror">
                                            <div class="custom-file">
                                                <input type="file" name="pdf_sertifikat"
                                                    class="custom-file-input @error('pdf_sertifikat') is-invalid @enderror"
                                                    id="inputSertifikat">
                                                <label class="custom-file-label" for="inputSertifikat">Pilih
                                                    Sertifikat</label>
                                            </div>
                                        </div>
                                        @error('pdf_setifikat')
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
@endsection
