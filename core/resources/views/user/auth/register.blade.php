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

  <!-- <section class="h-300">
		<div class="container h-300 padding-bottom-3x">
			<div class="row justify-content-sm-center h-300">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">{{__('Register')}}</h1>
							<form class="needs-validation" novalidate="" method="post" action="{{route('user.login.submit')}}">
                @csrf
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">{{__('First Name')}}</label>
                  <input class="form-control" type="text" name="first_name" placeholder="{{__('First Name')}}" id="reg-fn" value="{{old('first_name')}}">
                @error('first_name')
                <p class="text-danger">{{$message}}</p>
                @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln">{{__('Last Name')}}</label>
                  <input class="form-control" type="text" name="last_name" placeholder="{{__('Last Name')}}" id="reg-ln" value="{{old('last_name')}}">
                  @error('last_name')
                <p class="text-danger">{{$message}}</p>
                @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">{{__('E-mail Address')}}</label>
                  <input class="form-control" type="email" name="email" placeholder="{{__('E-mail Address')}}" id="reg-email" value="{{old('email')}}">
                  @error('email')
                  <p class="text-danger">{{$message}}</p>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">{{__('Phone Number')}}</label>
                  <input class="form-control" name="phone" type="text" placeholder="{{__('Phone Number')}}" id="reg-phone" value="{{old('phone')}}">
                  @error('phone')
                  <p class="text-danger">{{$message}}</p>
                  @endif
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">{{__('Password')}}</label>
                  <input class="form-control" type="password" name="password" placeholder="{{__('Password')}}" id="reg-pass">
                  @error('password')
                  <p class="text-danger">{{$message}}</p>
                  @endif
                </div>

              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm">{{__('Confirm Password')}}</label>
                  <input class="form-control" type="password" name="password_confirmation" placeholder="{{__('Confirm Password')}}" id="reg-pass-confirm">
                </div>
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

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none" type="submit"><span>{{__('Register')}}</span></button>
              </div>
                
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

  <div class="container padding-bottom-3x mb-1">
  <div class="row  justify-content-sm-center" >
          <div class="col-md-6">
            <div class="card register-area">
                <div class="card-body ">
                    <h4 class="margin-bottom-1x text-center">{{__('Register')}}</h4>
            <form class="row" action="{{route('user.register.submit')}}" method="POST">
                @csrf
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">{{__('First Name')}}</label>
                  <input class="form-control" type="text" name="first_name" placeholder="{{__('First Name')}}" id="reg-fn" value="{{old('first_name')}}">
                @error('first_name')
                <p class="text-danger">{{$message}}</p>
                @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln">{{__('Last Name')}}</label>
                  <input class="form-control" type="text" name="last_name" placeholder="{{__('Last Name')}}" id="reg-ln" value="{{old('last_name')}}">
                  @error('last_name')
                <p class="text-danger">{{$message}}</p>
                @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">{{__('E-mail Address')}}</label>
                  <input class="form-control" type="email" name="email" placeholder="{{__('E-mail Address')}}" id="reg-email" value="{{old('email')}}">
                  @error('email')
                  <p class="text-danger">{{$message}}</p>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">{{__('Phone Number')}}</label>
                  <input class="form-control" name="phone" type="text" placeholder="{{__('Phone Number')}}" id="reg-phone" value="{{old('phone')}}">
                  @error('phone')
                  <p class="text-danger">{{$message}}</p>
                  @endif
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">{{__('Password')}}</label>
                  <input class="form-control" type="password" name="password" placeholder="{{__('Password')}}" id="reg-pass">
                  @error('password')
                  <p class="text-danger">{{$message}}</p>
                  @endif
                </div>

              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm">{{__('Confirm Password')}}</label>
                  <input class="form-control" type="password" name="password_confirmation" placeholder="{{__('Confirm Password')}}" id="reg-pass-confirm">
                </div>
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

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none" type="submit"><span>{{__('Register')}}</span></button>
              </div>
            </form>
                </div>
            </div>
          </div>
        </div>
  </div>
  <!-- Site Footer-->
@endsection
