@extends('layouts.site')

@section('content')
<section id="home" class="hero-section hero-3 hero-4">
    <div class="container pos-rel">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h4><i class="fa fa-check"></i>#Quality & Greatness Guaranteed</h4>
                    <h1>We Build Digital Product For Your Business</h1>
                    <p>We provide software development & consultation services to startups, small &amp; medium businesses who are looking for a team to build their next successful startup.</p>
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
<section id="services" class="service-section">
    <div class="container">
        <div class="section-heading mb-40 text-center">
           <h2>Exclusive Services</h2>
           <p>We provide marketing services to startups and small businesses to looking for a partner <br>of their digital media, design &amp; development, lead generation.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item active item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-settings color-green"></i>
                    <h3>Software Development</h3>
                    <p>We are experts in software development ranging from websites, custom web &amp; mobile apps, SaaS solutions. We turn ideas into solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-paint-roller color-green"></i>
                    <h3>UX/UI Design</h3>
                    <p>With our strong taste in design, we offer extensive services from graphic design, branding (car, office, etc)</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item active item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-vector color-green"></i>
                    <h3>Software Refactor</h3>
                    <p>This includes legacy code upgrade, bug fixing in existing software, optimazation &amp; any issue related to system malfunction.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-cloud-up color-green"></i>
                    <h3>Cloud management</h3>
                    <p>We help you setup &amp; manage your cloud infrastructure so that you can focus on what you do best. (aws, azure, digital ocean, linode, etc)</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item active item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-layers-alt color-green"></i>
                    <h3>Integrations</h3>
                    <p>We will help you in integrating your business with any infrastructure of your choice including payment gateways to communication channels.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="features-item item-2">
                   <div class="features-pattern"></div>
                    <i class="ti-announcement color-green"></i>
                    <h3>Social Media Marketing</h3>
                    <p>We will make sure that your app gets to the desired users through our deep understanding and integration with the social media.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-list-section pos-rel padding">
    <div class="ov-shape-2 d-none d-md-block"></div>
     <div class="container">
         <div class="content-list-wrap row align-items-center">
             <div class="col-lg-6 col-md-6 xs-padding">
                 <div class="content-item">
                     <h2>Data analytics <br>For Small and medium Business</h2>
                     <p>We have focused on ensuring that you understand your business in a broad view, from sales data to understanding your leads and how to close them efficiently.</p>
                     <ul class="content-list green mb-20">
                        <li><i class="fa fa-dot-circle"></i>Customer traffic analysis.</li>
                        <li><i class="fa fa-dot-circle"></i>Sales data analysis.</li>
                        <li><i class="fa fa-dot-circle"></i>Leads management.</li>
                        <li><i class="fa fa-dot-circle"></i>Return on investment analysis.</li>
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
<br>
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
