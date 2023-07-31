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
    height: 600px;
    position: relative;
    margin: 6% auto;
    margin-left: 200px;
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
    width: 140px;
    margin-right: 100px;
    cursor: pointer;
    display: block;
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
    margin-left: 300px;
    font-weight: 500;
    color: #0518cd;
}
.select1{
    direction: bottom;
    width: 350px;
    padding: 10px 0;
    margin: 5px 5px;
    border: 1px solid #999;
    outline: none;
   border-radius: 10px;
   color: #ffffff;
   background-color: #0518cd;
}
.submit{
    margin-right: 40px;
}

    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="appname"><b>{{ env('APP_NAME') }}</b></h1>
            <div class="card form-box">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="LastName">

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror" name="Contact_no" value="{{ old('cotnact_no') }}" required autocomplete="contact_no" autofocus placeholder="contact_no">

                                @error('contact_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter Password">
                            </div>
                        </div>

                        <select class="select1" name="id">

                            <option name="" value="" class="text-center"> Register As </option>

                            @foreach ($roles as $role)
                                <option name="id" value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach

                        </select>
                        <br><br>

                        <div class="row1 mb-0 submit">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary submit-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
