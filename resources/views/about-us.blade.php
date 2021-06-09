@extends('layouts.home')

@section('title')
    About Us
@endsection

@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Barber</h3>
            <h2>Our Barbershop</h2>
            <h2>About Us</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section id="about" class="about_section bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content align-center">
                    <h3 class="wow fadeInUp" data-wow-delay="100ms">Introducing</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms">The Barber Shop <br>Science 2001</h2>
                    <img class="wow fadeInUp" data-wow-delay="500ms" src="{{ asset('img/about-logo.png')}}" alt="logo">

                    @foreach ($aboutus as $item)
                        <p class="wow fadeInUp" data-wow-delay="600ms">
                           {{ $item->description }}
                        </p>
                    @endforeach

                    {{-- <a href="{{ route('about.us') }}" class="default_btn wow fadeInUp" data-wow-delay="600ms">More About Us</a> --}}
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="about_img">
                    <img src="https://i1.wp.com/therighthairstyles.com/wp-content/uploads/2013/12/17-skin-fade-with-shaved-part.jpg?resize=500%2C589&ssl=1" alt="idea-images" class="about_img_1 wow fadeInLeft"
                        data-wow-delay="200ms">
                    <img src="https://www.menshairstyletrends.com/wp-content/uploads/2018/04/wizzydabarber-black-beard-shape-bald-.jpg" alt="idea-images" class="about_img_2 wow fadeInRight"
                        data-wow-delay="400ms">
                    <img src="https://i.pinimg.com/originals/2d/28/f3/2d28f32785be198291037a0098aeb4b7.jpg" alt="idea-images" class="about_img_3 wow fadeInLeft"
                        data-wow-delay="600ms">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service_section bg-grey padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Barber</h3>
            <h2>Our Services</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">

            @foreach ($all_services as $service)
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<section id="team" class="team_section bd-bottom padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Our Barbers</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">

            @foreach ($barbers as $barber)
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="team_member">
                        @if($barber->photo)
                                <img src="{{ $barber->photo->getUrl() }}" alt="Team Member">
                        @endif
                        <div class="overlay">
                            <h3>{{ $barber->name }}</h3>
                            <p>{{ $barber->professional }}</p>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</section>
<section class="cta_section padding">
    <div class="container">
        <div class="display-table">
            <div class="table-cel">
                <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                    <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                    <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                        and boys hair.</p>
                    <a href="/" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
