@extends('layouts.auth')
@section('title', 'Set New Password')
@section('content')
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Set New Password</h4>
                            <form  method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email address</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password-confirm">                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                        </label>
                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Password">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif

                                    </div>



                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"> Reset Password</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
