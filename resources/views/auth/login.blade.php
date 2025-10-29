@extends('layouts.base-auth')

@section('content')
    <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <div class="auth-logo">
                            <a href="index.html"><img src="images/adu.png" class="img-fluid" style="width: 160px; height: auto;" alt="Logo"></a>
                        </div>
                        <h1 class="auth-title">Log in.</h1>
                        <p class="auth-subtitle mb-5">Login menggunakan akun yg sudah teregister / terdaftar </p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="email" name="email" class="form-control
                                @error('email')
                                is-invalid
                                @enderror form-control-xl" placeholder="email">

                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" name="password" class="form-control
                                @error('password')
                                is-invalid
                                @enderror form-control-xl" placeholder="password">

                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-1">Log in</button>
                        </form>

                    </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">

                    </div>
    </div>
@endsection
