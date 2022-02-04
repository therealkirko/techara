@extends('layouts.site')

@section('content')
<div class="header-height"></div>

    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8082640900807!2d36.78121941445887!3d-1.2892674359923573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10a795d9aebb%3A0x5ddb15913af47c8a!2sSenteu%20Plaza!5e0!3m2!1sen!2ske!4v1643714076803!5m2!1sen!2ske" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>
    <section class="contact-section padding">
        <div class="map"></div>
        <div class="container">
            <div class="contact-wrap d-flex align-items-center row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>Get in touch with us & <br>send us message today!</h2>
                        <p>We would be glad to  what you have to say about us. </p>
                        <h3>6th Floor, Senteu Plaza <br>Kilimani, Nairobi</h3>
                        <h4><span>Email:</span> hey@techara.co.ke <br> <span>Phone:</span> +254 (0) 700 632 482 <br></h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @elseif(\Session::has('error'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('send') }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn btn-blue" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
