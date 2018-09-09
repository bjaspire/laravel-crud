@extends('layouts.app')
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST"  class="pt-3" action="{{ route('login') }}">
                  @csrf
                <div class="form-group">        
                  <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif                  
                </div>
                <div class="form-group">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                </div>      

                                
                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                   <a class="auth-link text-black" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                   </a>                  
                </div>
                <div class="text-center mt-4 font-weight-light">
                {{ __('Don\'t have an account?') }} 
                <a href="{{ route('password.request') }}" class="text-primary">
                    {{ __('Create') }}
                </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
@endsection