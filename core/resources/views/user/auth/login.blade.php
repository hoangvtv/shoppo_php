@extends('master.front')
@section('title')
    {{__('Login')}}
@endsection
@section('content')

    <!-- Page Title-->
<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>
                <li class="separator"></li>
                <li>{{__('Login/Register')}}</li>
              </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Page Content-->

  <section class="h-100">
		<div class="container h-100 padding-bottom-3x">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>             
                  <div class="zmdi zmdi-facebook"></div>
                  <div class="twitter text-center mr-3"><div class="fa fa-twitter"></div></div>
							<form class="needs-validation" novalidate="" method="post" action="{{route('user.login.submit')}}">
                @csrf
                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<div class="form-group input-group">
                  <input class="form-control" type="email" name="login_email" placeholder="{{ __('Email') }}" value="{{old('login_email')}}"><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>
                @error('login_email')
                  <p class="text-danger">{{$message}}</p>
                  @enderror

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="{{route('user.forgot')}}" class="float-end">
											Forgot Password?
										</a>
									</div>
									<div class="form-group input-group">
                  <input class="form-control" type="password" name="login_password" placeholder="{{ __('Password') }}" ><span class="input-group-addon"><i class="icon-lock"></i></span>
                  </div>
                  @error('login_password')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
								</div>


                  @if ($setting->recaptcha == 1)
                    <div class="col-lg-12 mb-4">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        @if ($errors->has('g-recaptcha-response'))
                        @php
                            $errmsg = $errors->first('g-recaptcha-response');
                        @endphp
                        <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                        @endif
                    </div>
                    @endif

								<div class="d-flex align-items-center">
									<div class="form-check">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="remember_me">
                      <label class="custom-control-label" for="remember_me">{{__('Remember me')}}</label>
                    </div>
									</div>
									<button type="submit" class="btn btn-primary ms-auto"><span>{{ __('Login') }}</span>
									
									</button>
								</div>
                
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="{{route('user.register')}}" class="text-dark">{{ __('Register') }}</a>
							</div>
						</div>
            <div class="card p-3 text-center">
              <h6 class="form-text-color blue"> {{ __('Or Login with') }}</h6>
              <div class="d-flex justify-content-center mt-1">
                  @if($setting->facebook_check == 1)
                  <a class="facebook-btn mr-2" href="{{route('social.provider','facebook')}}">{{ __('Facebook') }}</a>
                  @endif
                  @if($setting->google_check == 1)
                    <a class="google-btn" href="{{route('social.provider','google')}}"> {{ __('Google') }}</a>
                    @endif

              </div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  <!-- Site Footer-->
@endsection
