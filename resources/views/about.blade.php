@extends('layouts.site')

@section('content')
<div class="header-height"></div>

<section class="page-header">
    <div class="container">
        <div class="page-content text-center">
            <h2>Know More About Us</h2>
            <p>We are all about your goals, our mission is to make sure we maximise our input to ensure that your idea has transitioned from an idea concept to a functional product that can be used in the market. </p>
        </div>
    </div>
</section>
<section class="content-section content-3 pos-rel padding sm-pb-none">
    <div class="ov-shape-4 d-none d-lg-block"></div>
    <div class="container">
        <div class="content-wrap row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="content-info">
                    <h2>The #1 Tool For Crerating <br>Stunning Marketing</h2>
                    <p>We provide marketing services to startups and small businesses to looking for a partner of their digital media, design &amp; development, lead generation.</p>
                    <p>It is a long established fact that a reader will be distract ed by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using and content here.</p>
                    <a class="default-btn" href="#">See Pricing<span></span></a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <img src="img/dashboard-2.png" alt="Dashboard Mockup">
            </div>
        </div>
    </div>
 </section><!--/. content-section -->

 <section id="feature" class="features-section">
    <div class="container">
       <div class="section-heading text-center mb-40">
           <h2>Our Core Value</h2>
           <p>We live these values every day. <br> In everything we do..</p>
       </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 sm-padding">
                <div class="features-item active">
                    <i class="truno truno-chart color-red bg-red"></i>
                    <h3 class="color-red">Stay Hungry</h3>
                    <p>We are well-experienced but we don't know everything. That's why we keep an open mind and are always ready totry out new things.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 sm-padding">
                <div class="features-item">
                    <i class="truno truno-network color-blue bg-blue"></i>
                    <h3 class="color-blue">People First</h3>
                    <p>Our employees and customers come first. We seek to show empathy and understanding in all situations, whether it’s a problem or a complaint.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 sm-padding">
                <div class="features-item">
                    <i class="truno truno-network color-blue bg-blue"></i>
                    <h3 class="color-blue">Integrity</h3>
                    <p>Our word is our bond. We do what we promise by making the right choices and not the easy nor the popular choices.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 sm-padding">
                <div class="features-item active">
                    <i class="truno truno-hours color-green bg-green"></i>
                    <h3 class="color-green">Accountability</h3>
                    <p>We don’t run away from mistakes or blame others for our shortcomings. We take responsibility for all our actions and inactions.</p>
                </div>
            </div>
        </div>
    </div>
</section> <br>
@include('components.testimonials')
@endsection
