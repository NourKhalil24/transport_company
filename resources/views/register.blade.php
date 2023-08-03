@extends('dashboard')
@section('content2')
{{--<div id="inner_banner" class="section inner_banner_section">--}}
{{--  <div class="container">--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <div class="full">--}}
{{--          <div class="title-holder">--}}
{{--            <div class="title-holder-cell text-left">--}}
{{--              <h1 class="page-title">REGISTER </h1>--}}
{{--              <ol class="breadcrumb">--}}
{{--                <li><a href="{{url('/')}}" style="margin-top: 20px;">Home</a></li>--}}
{{--                <li class="active">register</li>--}}
{{--              </ol>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>register</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">


                <form id="register_form" role="form" method="POST" class="form_contant" action="{{ url('/register')}}">
                {{ csrf_field() }}
                  <fieldset class="row">
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input  id="first_name" name="first_name" class="field_custom" placeholder="First Name" type="text" required>
                    @if ($errors->has('first_name'))
                   <span class="error">{{ $errors->first('first_name') }}</span>
                    @endif
                  </div>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input  id="middle_name" name="middle_name" class="field_custom" placeholder="Middle Name" type="text" required>
                    @if ($errors->has('middle_name'))
                   <span class="error">{{ $errors->first('middle_name') }}</span>
                   @endif
                  </div>

                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input  id="last_name" name="last_name" class="field_custom" placeholder="Last Name" type="text" required>
                    @if ($errors->has('last_name'))
                   <span class="error">{{ $errors->first('last_name') }}</span>
                   @endif
                  </div>

                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input name="birthday" class="field_custom" placeholder="birthday" type="date" required>
                  </div>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input id="phone_number" name="phone_number" class="field_custom" placeholder="Your Phone Number" type="text" required>
                    @if ($errors->has('phone_number'))
                  <span class="error">{{ $errors->first('phone_number') }}</span>
                  @endif
                  </div>

                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input id="email" name="email" class="field_custom" placeholder="Your Email" type="email" required>
                    @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                  @endif
                  </div>

                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input id="password" name="password" class="field_custom" placeholder="password " type="password" required>
                    @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                  @endif
                  </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input id="password-confirm" type="password" class="field_custom" name="password_confirmation" placeholder="password_confirmation" required>
                      @if ($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
{{--                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

{{--                  </div>--}}
                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input id="user_name" name="user_name" class="field_custom" placeholder="user name" required type="text"></textarea>
                    @if ($errors->has('user_name'))
                  <span class="error">{{ $errors->first('user_name') }}</span>
                  @endif
                  </div>
                  <div class="center">
                    <button class="btn main_bt">Register</button>
                  </div>

{{--                    <div style="margin: 20px">--}}
{{--                      <a href="{{route('login')}}" class="text-small  text-light-blue" style="margin-left: 35%">Return Login ?</a>--}}
{{--                    </div>--}}


                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
