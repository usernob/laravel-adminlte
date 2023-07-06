<div>
    <div class="d-flex justify-content-center">
        <img src="{{ asset($siswa_detail->foto) }}" alt="" class="img-circle elevation-2" style="object-fit: cover; object-position: center;" width="160"
            height="160">
    </div>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <th>Nama</th>
                <th>{{ $siswa_detail->nama }}</th>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>{{ $siswa_detail->alamat }}</th>
            </tr>
        </tbody>
    </table>
</div>
