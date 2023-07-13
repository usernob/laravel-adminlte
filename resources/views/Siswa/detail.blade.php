<div class="modal-body">
    <a class="d-flex justify-content-center mb-5" href="{{ asset($siswa_detail->foto) }}" target="_blank">
        <img src="{{ asset($siswa_detail->foto) }}" alt="" class="img-circle elevation-2"
            style="object-fit: cover; object-position: center;" width="160" height="160">
    </a>
    <div class="row">
        <div class="col">
            Nama
        </div>
        <div class="col my-2">
            {{ $siswa_detail->nama }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            Alamat
        </div>
        <div class="col my-2">
            {{ $siswa_detail->alamat }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            No telp
        </div>
        <div class="col my-2">
            {{ $siswa_detail->no_telp }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            Program
        </div>
        <div class="col my-2">
            {{ $siswa_detail->program->nama_program }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            Harga Program
        </div>
        <div class="col my-2">
            Rp @format($siswa_detail->program->harga_program)
        </div>
        <div class="w-100"></div>
        <div class="col">
            Nilai
        </div>
        <div class="col my-2">
            <a href="{{ asset($siswa_detail->pdf_nilai) }}" target="_blank">Lihat File</a>
        </div>
        <div class="w-100"></div>
        <div class="col">
            Sertifikat
        </div>
        <div class="col my-2">
            <a href="{{ asset($siswa_detail->pdf_sertifikat) }}" target="_blank">Lihat File</a>
        </div>
        <div class="w-100"></div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">
        Tutup
    </button>
    <a href="{{ route('siswa.edit', $siswa_detail->id) }}" type="button" class="btn btn-primary">Edit Data</a>
    <a href="{{ route('siswa.destroy', $siswa_detail->id) }}" type="button" class="btn btn-danger">Hapus Data</a>
</div>
