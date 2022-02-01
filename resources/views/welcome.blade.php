@extends('layouts.site')

@section('content')
<section id="home" class="hero-section hero-3 hero-4">
    <div class="container pos-rel">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h4><i class="fa fa-check"></i>#Editors Choice App Of 2020</h4>
                    <h1>We Build Digital Product For Your Sstartup</h1>
                    <p>We provide software development & consultation services to startups and small businesses who are looking for a team to build their next successful startup.</p>
                    <div class="subscribe-wrap">
                        <div class="subscribe-box clearfix">
                            <div class="subscribe-form-wrap">
                                <form action="#" class="subscribe-form">
                                    <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                                    <button type="submit" class="submit-btn anim-btn">Get started<span></span></button>
                                    <div id="subscribe-result">
                                        <p class="subscription-success"></p>
                                        <p class="subscription-error"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-moc-5 d-none d-lg-block"></div>
    </div>
</section>
<div class="sponsor-section">
    <div class="container">
       <div class="section-heading mb-40 text-center">
           <h2>Working with the best tools</h2>
           <p>We aim to build your business with the best tools to meet your custom needs.</p>
       </div>
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            <div class="sponsor-item">
                <img src="img/tools/laravel.png" alt="sponsor" style="object-fit: fill; width: 70px; height: 65px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/django.png" alt="sponsor" style="object-fit: fill; width: 65px; height: 65px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/firebase.png" alt="sponsor" style="object-fit: fill; width: 65px; height: 65px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/wordpress.png" alt="sponsor" style="object-fit: fill; width: 65px; height: 65px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/mysql.png" alt="sponsor" style="object-fit: fill; width: 65px; height: 65px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/postgresql.png" alt="sponsor" style="object-fit: fill; width: 180px; height: 350px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/flutter.png" alt="sponsor" style="object-fit: fill; width: 150px; height: 100px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/golang.png" alt="sponsor" style="object-fit: contain; width: 150px; height: 100px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/mongodb.png" alt="sponsor" style="object-fit: fill; width: 200px; height: 180px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/nodejs.png" alt="sponsor" style="object-fit: contain; width: 130px; height: 80px border: solid 1px">
            </div>
            <div class="sponsor-item">
                <img src="img/tools/spring.png" alt="sponsor" style="object-fit: fill; width: 170px; height: 130px border: solid 1px">
            </div>
            {{-- <div class="sponsor-item">
                <img src="img/sponsor-4.png" alt="sponsor">
            </div> --}}
        </div>
    </div>
</div>
<section id="feature" class="features-section">
    <div class="container">
        <div class="section-heading mb-40 text-center">
           <h2>Exclusive Services</h2>
           <p>We provide marketing services to startups and small businesses to looking for a partner <br>of their digital media, design &amp; development, lead generation.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-cloud-up color-green"></i>
                    <h3>Cloud management</h3>
                    <p>We help you manage your cloud infrastructure so that you can focus on what you do best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item active item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-settings color-green"></i>
                    <h3>Software Development</h3>
                    <p>With us, you never go wrong in terms of development. We are extensive in the latest and stable tech.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-layout-media-left-alt color-green"></i>
                    <h3>Product Quality & Support</h3>
                    <p>We ensure that you do not feel left out after the job is done, Our team will ensure that your business runs uninterapted.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-section content-3 pos-rel">
    <div class="ov-shape-1 d-none d-lg-block"></div>
    <div class="container pos-rel padding">
        <div class="content-wrap row align-items-center">
            <div class="col-md-6 offset-md-6">
                <div class="content-info">
                    <h2>The #1 Tool For Crerating <br>Stunning Marketing</h2>
                    <p>We provide marketing services to startups and small businesses to looking for a partner of their digital media, design &amp; development, lead generation.</p>
                    <p>Our marketing team will walk with you from understanding your customers to ensuring that you reach new grounds and grow your business or platform. We have previously worked with big and medium tech companies to achieve company's goal.</p>
                    <a class="default-btn green" data-scroll href="#pricing">See Pricing<span></span></a>
                </div>
            </div>
        </div>
        <div class="dashboard-moc d-none d-md-block"></div>
    </div>
</section>
<section class="content-list-section pos-rel padding">
    <div class="ov-shape-2 d-none d-md-block"></div>
     <div class="container">
         <div class="content-list-wrap row align-items-center">
             <div class="col-lg-6 col-md-6 xs-padding">
                 <div class="content-item">
                     <h2>Analytics tools <br>For Small and medium Business</h2>
                     <p>It is clear that the moderm oil is data, we have tools for monitoring your website or platform to analysing your customer data to establish the connection.</p>
                     <ul class="content-list green mb-20">
                         <li><i class="fa fa-dot-circle"></i>On Being Ethical</li>
                         <li><i class="fa fa-dot-circle"></i>On knowing Your Audience</li>
                         <li><i class="fa fa-dot-circle"></i>Communication &amp; Sharing</li>
                     </ul>
                     <a class="default-btn green" href="#">Get Started<span></span></a>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 xs-padding">
                 <div class="content-img">
                     <img src="img/content-4.png" alt="img">
                 </div>
             </div>
         </div>
     </div>
 </section>

<section class="counter-section">
    <div class="container">
       <div class="section-heading mb-40 text-center">
           <h2>We're The Best Software development agency. Always <br>Deliver More Than Expected!</h2>
           <p>We have been trusted and shipped software across the world. The journey to a successful startup starts with us. Let us break it down for you.</p>
       </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 sm-padding">
                <div class="counter-content text-center">
                    <h2 class="color-green"><span class="odometer" data-count="102">102</span>+</h2>
                    <span>Project Completed</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 sm-padding">
                <div class="counter-content text-center">
                    <h2 class="color-green"><span class="odometer" data-count="20">20</span>+</h2>
                    <span>Experts Support Team</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 sm-padding">
                <div class="counter-content text-center">
                    <h2 class="color-green"><span class="odometer" data-count="15">15</span>+</h2>
                    <span>Our Worldwide Clients</span>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.testimonials')
<section class="cta-section pb-80 padding">
    <div class="container">
        <div class="cta-wrap">
            <div class="cta-content text-center">
                <h2>Getting Connected With Us &amp; <br>For The First time? </h2>
                <p>Submit your email today, an agent will be assigned you so that he can attend to your projects needs. We are looking forward to hearing from you.</p>
                <div class="btn-group">
                    <a class="default-btn green" href="#">Get Started<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<a data-scroll href="#header" id="scroll-to-top"><i class="ti-arrow-up"></i></a>
@endsection
