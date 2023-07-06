<div>
    <div class="d-flex justify-content-center">
        <img src="{{ asset($user_detail->foto) }}" alt="" class="img-circle elevation-2" style="object-fit: cover; object-position: center;" width="160"
            height="160">
    </div>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <th>Nama</th>
                <th>{{ $user_detail->nama }}</th>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>{{ $user_detail->email }}</th>
            </tr>
        </tbody>
    </table>
</div>
