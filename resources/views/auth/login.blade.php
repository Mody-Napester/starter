@extends('auth._layout')

@section('content')
    <div class="wrapper-page">
        <div class="card-box">
            <div class="panel-heading">
                <h4 class="text-center"> Sign In to <strong>{{ config('app.name') }}</strong></h4>
            </div>

            <div class="p-20">
                <form class="form-horizontal m-t-20" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group-custom">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="{{ $errors->has('email') ? ' is-invalid' : '' }}"/>
                        <label class="control-label" for="email">Username</label><i class="bar"></i>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group-custom">
                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                        <label class="control-label" for="user-password">Password</label><i class="bar"></i>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group ">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-purple btn-block text-uppercase waves-effect waves-light" type="submit">
                                Log In
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-20 m-b-0">
                        <div class="col-12">
                            <a href="{{ route('password.request') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                    </div>

                    <div class="form-group m-t-40 m-b-0">
                        <div class="col-12 text-center">
                            <h5 class="font-18"><b>Sign in with</b></h5>
                        </div>
                    </div>

                    <div class="form-group m-b-0 text-center">
                        <div class="col-12">
                            <button type="button" class="btn btn-sm btn-facebook waves-effect waves-light m-t-20">
                                <i class="fa fa-facebook m-r-5"></i> Facebook
                            </button>

                            <button type="button" class="btn btn-sm btn-twitter waves-effect waves-light m-t-20">
                                <i class="fa fa-twitter m-r-5"></i> Twitter
                            </button>

                            <button type="button" class="btn btn-sm btn-googleplus waves-effect waves-light m-t-20">
                                <i class="fa fa-google-plus m-r-5"></i> Google+
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-white">
                    Don't have an account? <a href="{{ route('register') }}" class="text-white m-l-5"><b>Sign Up</b></a>
                </p>
            </div>
        </div>

    </div>
@endsection
