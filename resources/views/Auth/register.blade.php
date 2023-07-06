@extends('Layout.auth.layout')
@section('title', 'Register')
@section('body-class', 'register-page')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('auth.proses-register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                id="exampleInputEmail1" placeholder="Enter name" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telepon Number</label>
                            <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                id="exampleInputEmail1" placeholder="Enter email" value="{{ old('no_telp') }}">
                            @error('no_telp')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="exampleInputPassword1" placeholder="Password"
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Retype Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password_confirmation" id="exampleInputPassword1" placeholder="Password"
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="input-file">Profile Picture</label>
                            <div class="input-group @error('foto') is-invalid @enderror">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                                        name="foto" id="input-file">
                                    <label class="custom-file-label" for="input-file">Choose file</label>
                                </div>
                            </div>
                            @error('foto')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms">
                                <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="/login" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <script>
        document.getElementById('input-file').onchange = function() {
            document.querySelector("label[class='custom-file-label'][for='input-file']").innerHTML = this.files[0].name;
        };
    </script>
@endsection
