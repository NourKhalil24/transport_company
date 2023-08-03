@extends('dashboard')
@section('content2')
{{--<div id="inner_banner" class="section inner_banner_section">--}}
{{--  <div class="container">--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <div class="full">--}}
{{--          <div class="title-holder">--}}
{{--            <div class="title-holder-cell text-left">--}}
{{--              <h1 class="page-title">Call Back </h1>--}}
{{--              <ol class="breadcrumb">--}}
{{--                <li><a href="{{url('/')}}" style="margin-top: 20px;">Home</a></li>--}}
{{--                <li class="active">call back</li>--}}
{{--              </ol>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
<!-- end inner page banner -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making our trips that easy , make my reservation from my home any time ! I wish I would have thought of it first.
                    I am really satisfied with my first reservation from your website.</div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Nora Ali</h4>
                    <span class="testimonial-position">homs , syria </span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> your  services are fast and safe, i can send and reseive goods in one day that is grazy . </div>
                  <div class="testimonial-photo"> <img src="images/it_service/team-member-1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Hamada Nour</h4>
                    <span class="testimonial-position">damascuse ,syria</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> making every thing in that easy just from our home thanks for that wish you luck.</div>
                  <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Samia ALgazaare</h4>
                    <span class="testimonial-position">aleppo, syria</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>

@endsection