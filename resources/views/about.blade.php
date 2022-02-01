@extends('layouts.site')

@section('content')
<div class="header-height"></div>

<section class="page-header">
    <div class="container">
        <div class="page-content text-center">
            <h2>Know More About Us</h2>
            <p>Make your awesome business idea a reality with Truno, the fresh new theme <br>from Mikado - custom made for modern startups.</p>
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

<section class="content-section content-3 pos-rel padding sm-pb-none">
    <div class="ov-shape-3 d-none d-lg-block"></div>
    <div class="dashboard-moc d-none d-lg-block"></div>
    <div class="container">
        <div class="content-wrap row align-items-center">
            <div class="col-lg-6">
                <img src="img/dashboard-1.png" class="d-lg-none" alt="Dashboard Mockup">
            </div>
            <div class="col-lg-6">
                <div class="content-info">
                    <h2>The #1 Tool For Crerating <br>Stunning Marketing</h2>
                    <p>We provide marketing services to startups and small businesses to looking for a partner of their digital media, design &amp; development, lead generation.</p>
                    <p>It is a long established fact that a reader will be distract ed by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using and content here.</p>
                    <a class="default-btn" href="#">See Pricing<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding">
    @include('components.testimonials')
</section>
@endsection
