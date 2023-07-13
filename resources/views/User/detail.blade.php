<div>
    <div class="d-flex justify-content-center mb-5">
        <img src="{{ asset($user_detail->foto) }}" alt="" class="img-circle elevation-2"
            style="object-fit: cover; object-position: center;" width="160" height="160">
    </div>
    <div class="row">
        <div class="col">
            Nama
        </div>
        <div class="col my-2">
            {{ $user_detail->nama }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            No Telepon
        </div>
        <div class="col my-2">
            {{ $user_detail->no_telp }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            email
        </div>
        <div class="col my-2">
            {{ $user_detail->email }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            level
        </div>
        <div class="col my-2">
            {{ $user_detail->level }}
        </div>
        <div class="w-100"></div>
        <div class="col">
            Foto
        </div>
        <div class="col my-2">
            <a href="{{ $user_detail->foto }}">lihat file</a>
        </div>
        <div class="w-100"></div>
    </div>
</div>
