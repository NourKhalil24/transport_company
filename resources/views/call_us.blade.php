@extends('dashboard')
@section('content2')
{{--<div id="inner_banner" class="section inner_banner_section">--}}
{{--  <div class="container">--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <div class="full">--}}
{{--          <div class="title-holder">--}}
{{--            <div class="title-holder-cell text-left">--}}
{{--              <h1 class="page-title">Call US </h1>--}}
{{--              <ol class="breadcrumb">--}}
{{--                <li><a href="{{url('/')}}" style="margin-top: 20px;">Home</a></li>--}}
{{--                <li class="active">call us</li>--}}
{{--              </ol>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
<!-- end inner page banner -->
<div class="section" style="margin-top: 75px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont" >
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>

              <form  role="form" method="POST" action="{{ url('/contact') }}" style="margin_top=20px;">
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
                    <input name="comment" class="field_custom" placeholder="Your Comment " type="textarea" required>
                    @if ($errors->has('Comment'))
                    <span class="error">{{ $errors->first('Comment') }}</span>
                  @endif
                  </div>
                  <div class="center">
                    <button class="btn dark_gray_bt">Send</button>
                  </div>

                      <!-- <div>
                          <a href="{{url('forget_password')}}" style="color: #0f3e68;font-size: 15px;">Forget Password!</a>
                      </div> -->



                  </fieldset>
                </form>
            <!-- jj -->
            </div>
           <!-- <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div> --> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection