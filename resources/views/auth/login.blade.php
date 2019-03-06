@extends('layouts.auth')

@section('content')
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Login</h4>
                            <form  method="POST" action="{{ route('login') }}">
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
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                        <label class="pull-right">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </label>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
