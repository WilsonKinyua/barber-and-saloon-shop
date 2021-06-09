@extends('layouts.home')

@section('title')
    Blog -
@endsection

@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Barber</h3>
            <h2>Barbershop News</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-12 sm-padding">
                <div class="row blog-grid">

                    @foreach ($blogs as $blog)
                        <div class="col-sm-4 padding-15">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    @if($blog->photo)
                                        <img src="{{ $blog->photo->getUrl() }}">
                                    @endif
                                    <span class="category"><a href="#">interior</a></span>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="#">{{ $blog->title }}</a></h3>
                                    {!! $blog->description !!}
                                    {{-- <a href="#" class="read-more">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- <ul class="pagination-wrap text-center mt-30">
                    <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</section>
@endsection
