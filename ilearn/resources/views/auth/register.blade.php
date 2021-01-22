@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header" style ="text-align: center; background-color:#A2A2A1FF;">{{ __('Register') }}</div>

                <div class="card-body" style="background-color: #F5F5F5;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <center>
                        <div class="form-group row col-md-10" >
                            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input  id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>
               
                        <div class="form-group row col-md-10">
                            <label for="username" class="col-form-label text-md-right">{{ __('Username') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="username" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group row col-md-10">
                            <label for="email" class="col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group row col-md-10">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group row col-md-10">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <!-- </div> -->
                        </div>
                        </center>
                        <center>
                        <div class="form-group ">

                            <div class="col-md-10">
                            
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
