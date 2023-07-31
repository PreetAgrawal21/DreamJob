@extends('layouts.app')

@section('content')

<style>
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.login{
    height: 100%;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{
    width: 400px;
    height: 400px;
    position: relative;
    margin: 6% auto;
    margin-left: 330px;
    background: #ffffff;
    padding: 5px;
    box-shadow: 0 0 20px 9px #ccced1;
}
.button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    
    border-radius: 30px;
}
.toggle-btn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background-color: #390ae4;
    border-radius: 30px;
    transition: .5s;
}
.input-group{
    top: 120px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.form-control{
    width: 350px;
    padding: 10px 0;
    margin: 5px 5px;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1p solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 150px;
    margin-left: 100px;
    cursor: pointer;
    display: block;
    align-items: center;
    background-color: #0518cd;
    border: 0;
    outline: none;
    border-radius: 20px;
}
.btn-link{
    margin-left: 80px;
    width: 200px
}
.appname{
    margin-left: 430px;
    font-weight: 500;
    color: #0518cd;
}

    </style>
<div class="container login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="appname"><b>{{ env('APP_NAME') }}</b></h1>
            <div class="card form-box">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="row1 mb-0">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary submit-btn">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
