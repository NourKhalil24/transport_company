@extends('dashboard')
@section('content2')

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
                <h2>{{trans('login')}}</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">


                <form  role="form" method="POST" action="{{ url('/login') }}" >
                {{ csrf_field() }}
                  <fieldset class="row">
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input name="email" class="field_custom" placeholder="Your Email" type="email" required>
                    @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                  @endif
                  </div>
                  </br>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input name="password" class="field_custom" placeholder="password " type="password" required>
                    @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                  @endif
                  </div>
                  <div class="center">
                    <button class="btn main_bt">login</button>
                  </div>

                      <div>
                          <a href="{{url('forget_password')}}" style="color: #0f3e68;font-size: 15px;">Forget Password!</a>
                      </div>



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
