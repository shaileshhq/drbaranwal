<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Award;
use App\Models\Slider;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\OurTeam;
use App\Models\Service;
use App\Models\OurMission;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\ServiceEnquiry;

class FrontController extends Controller
{
    public function index()
    {
        $slider_list    = Slider::orderBy('id', 'desc')->get();
        $award_list     = Award::orderBy('id', 'desc')->get();
        $service_list   = Service::orderBy('id', 'desc')->take(4)->get();
        $blog_list      = Blog::orderBy('id', 'desc')->get();
        $teams          = OurTeam::latest()->get();
        $gallery_list   = Gallery::latest()->latest()->inRandomOrder()->take(8)->get();
        return view('frontend.index', compact('slider_list', 'award_list', 'service_list', 'blog_list', 'gallery_list','teams'));
    }

    public function about()
    {
        $teams = OurTeam::latest()->get();
        return view('frontend.about', compact('teams'));
    }

    public function service()
    {
        $service_list = Service::latest()->get();
        return view('frontend.service', compact('service_list'));
    }

    public function serviceDetail($id)
    {
        $service_detail = Service::where('slug', $id)->firstOrFail();
        return view('frontend.service_detail', compact('service_detail'));
    }

    public function serviceStore(Request $request, $slug)
    {
        
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required|digits:10',
            'email'     => 'required|email',
            'purpose'   => 'required',
            'message'   => 'required',
        ]);
        
        $service_detail = Service::where('slug', $slug)->firstOrFail();
        
        $enquiry = new ServiceEnquiry;
        $enquiry->service_id = $service_detail->id;
        $enquiry->name = $request->name;
        $enquiry->phone = $request->phone;
        $enquiry->email = $request->email;
        $enquiry->purpose = $request->purpose;
        $enquiry->message = $request->message;
        $enquiry->save();

        return redirect()->route('service.detail', $slug)->with('success', 'Your enquiry hasbeen sent Successfully!');
    }

    public function award($type)
    {
       
        $award_list = Award::where('award_type', $type)->latest()->get();
        return view('frontend.awards', compact('award_list', 'type'));
    }

    public function gallery()
    {
        $gallery_list = Gallery::latest()->get();
        return view('frontend.gallery', compact('gallery_list'));
    }

    public function blog()
    {
        $blog_list = Blog::latest()->get();
        return view('frontend.blog', compact('blog_list'));
    }

    public function blogDetail($id)
    {
        $blog_list = Blog::latest()->take(3)->get();
        $blog_detail = Blog::where('slug', $id)->firstOrFail();
        return view('frontend.blog_details', compact('blog_detail', 'blog_list'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required|digits:10',
            'email'     => 'required|email',
            'purpose'   => 'required',
            'message'   => 'required',
        ]);

        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->phone = $request->phone;
        $enquiry->email = $request->email;
        $enquiry->purpose = $request->purpose;
        $enquiry->message = $request->message;

        $enquiry->save();
        return redirect()->route('contact')->with('success', 'Your enquiry hasbeen sent Successfully!');
    }

    public function appointment(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required|digits:10',
            'email'     => 'required|email',
            'date'      => 'required',
            'time'      => 'required',
        ]);
        $appointment = new Appointment;
        $appointment->name      = $request->name;
        $appointment->phone     = $request->phone;
        $appointment->email     = $request->email;
        $appointment->date      = $request->date;
        $appointment->time      = $request->time;
        $appointment->save();
        return redirect()->route('index')->with('success', 'Your appointment has been sent successfully!');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function mission()
    {
        $missions = OurMission::latest()->get();
        return view('frontend.about.mission',compact('missions'));
    }

    public function team()
    {
        $teams = OurTeam::latest()->get();
        return view('frontend.about.team',compact('teams'));
    }
}
