@extends('layouts.home')


@section('content')

<div class="mapouter">
    <div class="gmap_canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.429562546505!2d36.73243023825228!3d-1.3476122109527346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f04e2529bcab3%3A0xb85155f9a25aa4c0!2sLangata%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1623265030821!5m2!1sen!2ske"
             width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    <style>
        .mapouter {
            position: relative;
            text-align: right;
            height: 350px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 350px;
            width: 100%;
        }
    </style>
</div>
<section class="contact-section padding">
    <div class="map"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>Get in touch with us & <br>send us message today!</h2>
                    <h3>{{ trans('panel.location') }}</h3>
                    <h4><span>Email:</span> {{ trans('panel.email') }} <br> <span>Phone:</span> {{ trans('panel.phone') }} </h4>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <form action="{{ route('contact.add') }}" method="post" class="form-horizontal">
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
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default_btn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
