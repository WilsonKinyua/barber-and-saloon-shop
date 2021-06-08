<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Denis">
    <title>

        @yield('title')  {{ trans('panel.site_title') }} || Our barbershop is the created for men who appreciate premium quality, time and flawless look.

    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">

    <link rel="stylesheet" href="{{ asset('css/elegant-font-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('css/barber-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/venobox/venobox.css')}}">

    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    @yield('style')
</head>

<body>
    <div id='preloader'>
        <div class='loader'>
            <img src="{{ asset('img/loading.gif')}}" width="80" alt="">
        </div>
    </div>
    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar ">
                <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Barbershop"></a>
                <div class="d-flex menu-wrap align-items-center">
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li>
                                <a data-scroll class="nav-link active" href="/">
                                    Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li><a href="#">About</a>
                            </li>
                            <li><a href="#">Services</a>
                            </li>
                            <li><a href="#">Gallery</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    {{-- <div class="header-btn">
                        <a href="#" class="menu-btn">Make Appointment</a>
                    </div> --}}
                </div>
            </nav>
        </div>
    </header>


    @yield('content')


    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo.png" alt="Brand">
                        <p>Our barbershop is the created for men who appreciate premium quality, time and flawless look.
                        </p>
                        <ul class="widget_social">
                            <li><a href="{{ trans('panel.facebook') }}"><i class="social_facebook"></i></a></li>
                            <li><a href="{{ trans('panel.twitter') }}"><i class="social_twitter"></i></a></li>
                            <li><a href="{{ trans('panel.google_plus') }}"><i class="social_googleplus"></i></a></li>
                            <li><a href="{{ trans('panel.instagram') }}"><i class="social_instagram"></i></a></li>
                            <li><a href="{{ trans('panel.linkedin') }}"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Location</h3>
                        <p>{{ trans('panel.location') }}</p>
                        <p><a href="malto:{{ trans('panel.email') }}">{{ trans('panel.email') }}</a>
                            <br>{{ trans('panel.phone') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Opening Hours</h3>
                        <ul class="opening_time">
                            {!! trans('panel.opening-hours') !!}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 sm-padding">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input"
                                    placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
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
    </section>
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="copyright">&copy;
                        <script type="text/javascript"> document.write(new Date().getFullYear())</script> {{ trans('panel.site_title') }}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

    <script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js')}}"></script>

    <script src="{{ asset('js/vendor/owl.carousel.min.js')}}"></script>

    <script src="{{ asset('js/vendor/jquery.isotope.v3.0.2.js')}}"></script>

    <script src="{{ asset('js/vendor/smooth-scroll.min.js')}}"></script>

    <script src="{{ asset('js/vendor/venobox.min.js')}}"></script>

    <script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{ asset('js/vendor/jquery.slicknav.min.js')}}"></script>

    <script src="{{ asset('js/vendor/jquery.nice-select.min.js')}}"></script>

    <script src="{{ asset('js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>

    <script src="{{ asset('js/vendor/wow.min.js')}}"></script>

    <script src="{{ asset('js/contact.js')}}"></script>

    <script src="{{ asset('js/appointment.js')}}"></script>

    <script src="{{ asset('js/script.js')}}"></script>
</body>


</html>
