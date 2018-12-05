@extends('auth._layout')

@section('content')

    <div class="wrapper-page">
        <div class=" card-box">
            <div class="panel-heading">
                <h4 class="text-center"> Sign Up to <strong>{{ config('app.name') }}</strong> </h4>
            </div>

            <div class="p-20">
                <form class="form-horizontal m-t-20" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group-custom">
                        <input type="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
                        <label class="control-label" for="email">Email</label><i class="bar"></i>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group-custom">
                        <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        <label class="control-label" for="name">Username</label><i class="bar"></i>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group-custom">
                        <input id="phone" type="text" class="{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                        <label class="control-label" for="phone">Phone</label><i class="bar"></i>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group-custom">
                        <input type="password" id="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                        <label class="control-label" for="password">Password</label><i class="bar"></i>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group-custom">
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required/>
                        <label class="control-label" for="password-confirm">{{ __('Confirm Password') }}</label><i class="bar"></i>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox" checked="checked">
                                <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-purple btn-block text-uppercase waves-effect waves-light" type="submit">
                                Register
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-40 m-b-0">
                        <div class="col-12 text-center">
                            <h5 class="font-18"><b>Sign Up with</b></h5>
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
                    Already have account?<a href="{{route('login')}}" class="text-white m-l-5"><b>Sign In</b></a>
                </p>
            </div>
        </div>

    </div>

@endsection
