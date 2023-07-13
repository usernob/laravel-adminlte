@extends('Layout.default.layout')
@section('title', 'Profile')
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
                                    Profile
                                </h3>
                            </div>
                            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            @foreach ($data->getAttributes() as $key => $value)
                                                @php $field = ucwords(str_replace('_', ' ', $key)) @endphp
                                                @if ($key == 'foto')
                                                    @continue
                                                @endif
                                                <div class="form-group">
                                                    <label for="input{{ $field }}">{{ $field }}</label>
                                                    <input type="text" name="{{ $key }}"
                                                        class="form-control @error($key) is-invalid @enderror"
                                                        id="input{{ $field }}"
                                                        placeholder="Masukkan {{ $field }}"
                                                        value="{{ old($key) ?? ($value ?? '') }}"
                                                        @if ($key == 'level') disabled @endif>
                                                    @error($key)
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
                                            @endforeach
                                        </div>
                                        <div class="col-5">
                                            <div class="h-100 d-flex justify-content-center align-items-center">
                                                <label for="foto" style="cursor: pointer;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset($data->foto) }}" width="200" height="200"
                                                        class="img-circle elevation-2" id="foto_preview"
                                                        style="object-fit: cover; object-position: center; width: 20rem; height: 20rem;">
                                                </label>
                                                <input type="file" name="foto" id="foto"
                                                    onchange="document.getElementById('foto_preview').src = window.URL.createObjectURL(this.files[0])"
                                                    hidden>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
