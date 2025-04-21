@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="login-card p-4" style="width: 400px; background: white; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">Login</h3>
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="{{ url('/register') }}">Daftar</a></p>
    </div>
</div>
@endsection

<style>
    .btn-custom {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }
    .btn-custom:hover {
        background: linear-gradient(135deg,rgb(144, 226, 150) 0%, #667eea 100%);
        transform: scale(1.05);
    }
    .form-control:focus {
        border-color: #764ba2;
        box-shadow: 0 0 8px rgba(118, 75, 162, 0.5);
    }
</style>

{{-- REGISTER PAGE --}}
@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="login-card p-4" style="width: 400px; background: white; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">Register</h3>
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Register</button>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="{{ url('/login') }}">Login</a></p>
    </div>
</div>
@endsection@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="login-card p-4" style="width: 400px; background: white; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">Login</h3>
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="{{ url('/register') }}">Daftar</a></p>
    </div>
</div>
@endsection

<style>
    .btn-custom {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }
    .btn-custom:hover {
        background: linear-gradient(135deg,rgb(144, 226, 150) 0%, #667eea 100%);
        transform: scale(1.05);
    }
    .form-control:focus {
        border-color: #764ba2;
        box-shadow: 0 0 8px rgba(118, 75, 162, 0.5);
    }
</style>

{{-- REGISTER PAGE --}}
@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="login-card p-4" style="width: 400px; background: white; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">Register</h3>
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Register</button>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="{{ url('/login') }}">Login</a></p>
    </div>
</div>
@endsection