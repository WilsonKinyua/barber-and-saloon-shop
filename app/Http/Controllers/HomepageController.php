<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Barber;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::with(['media'])->get();
        $services = Service::limit(4)->get();
        $all_services = Service::all();
        $barbers = Barber::with(['media'])->get();
        $blogs = Blog::with(['media'])->limit(3)->get();

        return view('welcome',compact('sliders','services','all_services','barbers','blogs'));
    }

    public function addBooking(Request $request) {
        $bookings = Booking::create($request->all());
        return redirect()->back()->with("success","Your bookings has been received");
    }

    public function addSubscriber(Request $request) {
        $sub = Subscriber::create($request->all());
        return redirect()->back()->with("success","Email added to the email list");
    }

    public function aboutUs() {
        $aboutus = AboutUs::orderBy('id','desc')->limit(1)->get();
        $all_services = Service::all();
        $barbers = Barber::with(['media'])->get();
        return view('about-us',compact('aboutus','all_services','barbers'));
    }

    public function gallery() {
        $gallery = Gallery::with(['media'])->get();
        return view('gallery',compact('gallery'));
    }
}
