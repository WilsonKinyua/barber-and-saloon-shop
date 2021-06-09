<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Barber;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\ContactUs;
use App\Models\Discount;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $galleries = Gallery::with(['media'])->get();
        return view('gallery',compact('galleries'));
    }

    public function blog() {
        $blogs = Blog::all();
        return view('blogs',compact('blogs'));
    }

    public function contact() {
        return view('contact-us');
    }

    public function contactAdd(Request $request) {
        $contact = ContactUs::create($request->all());
        return redirect()->back()->with("success","Message Sent successfully");
    }

    public function generateLink()  {
        if(Auth::check()) {
            $token = Str::random(10);

            $data = [
                "token" => $token,
                "discount" => 0,
                "customer_id" => Auth::user()->id
            ];

            $discount = Discount::where('customer_id','=',Auth::user()->id)->get();

            if(count($discount) > 0) {
                $discount = Discount::create($data);
            } else {
                return redirect()->back()->with('danger','Link generated already!!');
            }

        } else {
            return redirect()->back();
        }
    }
}
