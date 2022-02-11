@extends('navbar.navlogin')
@section('title','Login')
@section('content')

<div class="container box" style="padding-top: 20px;
            border-radius: 25px;
            width:400px;
            margin:0 auto;
            border:1px solid #ccc;
            background: #ffffff;">
    <h1 align="center"> {{__('Content.login')}} </h1>
    <p style="font-size: 100px;" align="center"><i class="fas fa-key"></i></p>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="far fa-check-circle"></i> <b>{{session('success')}}</b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('logfail'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle"></i> <b>{{session('logfail')}}</b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form method="post" action="/">
        {{csrf_field()}}
        <div class="form-group">
            <label> Email </label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}" />
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        </br>
        <div class="form-group">
            <label> Password </label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " />
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <br>
        <div class="form-group" align="center">
            <input type="submit" name="login" class="btn btn-success btn-lg" value="{{__('Content.login')}}" />
        </div>
    </form>
    <small class="d-block text-center mt-3">Belum punya akun ? <a href="/register">Klik disini</a> </small>
    <br>
</div>
</body>

</html>