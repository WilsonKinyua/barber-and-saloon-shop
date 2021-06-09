<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Blog;
use App\Models\Booking;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
