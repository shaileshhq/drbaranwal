<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Award;
use App\Models\Slider;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\WebsiteSetup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::count();
        $gallery = Gallery::count();
        $award = Award::count();
        $blog = Blog::count();
        $services = Service::count();
        $appointment = Appointment::count();
        $enquiry = Enquiry::count();
        $website_setup = WebsiteSetup::count();
        return view('backend.dashboard', compact('slider', 'gallery', 'award', 'blog', 'services', 'appointment', 'enquiry', 'website_setup'));
    }
}
