@extends('dashboard')
@section('content2')
{{--<div id="inner_banner" class="section inner_banner_section">--}}
{{--  <div class="container">--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <div class="full">--}}
{{--          <div class="title-holder">--}}
{{--            <div class="title-holder-cell text-left">--}}
{{--              <h1 class="page-title">Choose Us </h1>--}}
{{--              <ol class="breadcrumb">--}}
{{--                <li><a href="{{url('/')}}" style="margin-top: 20px;">Home</a></li>--}}
{{--                <li class="active">choose us</li>--}}
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
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Why Choose Us</h2>
            <!--<p class="large">Fastest travel  !</p>-->
          </div>
        </div>
      </div>
    </div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="full text_align_center margin_bottom_30">
    <div class="center">
      <div class="icon"> <img src="images/it_service/i2.png" alt="#" /> </div>
    </div>
    <h4 class="theme_color">goods service</h4>
    <p>send and receive goods any time you want</p>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="full text_align_center margin_bottom_30">
    <div class="center">
      <div class="icon"> <img src="images/it_service/i3.png" alt="#" /> </div>
    </div>
    <h4 class="theme_color">travel service</h4>
    <p>make reservation from your home</p>
  </div>
</div>
<div class="row" style="margin-top: 35px">
  <div class="col-md-8">
    <div class="full margin_bottom_30">
      <div class="accordion border_circle">
        <div class="bs-example">
          <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Make reservations from your home<i class="fa fa-angle-down"></i></a> </p>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>You can easily access our list of flights and choose what suits you in terms of time and do not forget the low cost with the ability to reserve the number of seats you want and for payment do not worry<br> electronic payment solves the problem
<br>Do not forget to be accurate in your information to avoid errors<br>
Happy trip </p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i>send and receive goods<i class="fa fa-angle-down"></i></a> </p>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                Need to send merchandise urgently!?<br>
                     Do you want to receive your goods correct and sound without errors in the sending process!?<br>
                     Register with us and enjoy excellent service with
                     fast delivery
                  <p>

                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
@endsection