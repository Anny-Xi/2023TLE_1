<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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


        $tours = Tour::where('start_time', '>', date('Y-m-d H:i:s'))->get();
        return view('listTour', ['tours' => $tours]);

    }

    public function tourCreate()
    {
        if (!Auth::check()) {
            $this->middleware('auth');
            return redirect('/')->with([
                'message' => 'Je bent niet ingelogd.!',
                'status' => 'danger'
            ]);
        }else{
            return view('createTour');
        }

    }

    public function tourStore(Request $request)
    {
        if (!Auth::check()) {
            $this->middleware('auth');
            return redirect()->back()->with([
                'message' => 'Je bent niet ingelogd!',
                'status' => 'danger'
            ]);
        } else {
            $request->validate([
                'nameMuseum' => ['required', 'string', 'max:255'],
                'nameLocation' => ['required', 'string', 'max:1080'],
                'startTime' => 'required|date|before:endTime',
                'endTime' => 'required|date|after:startTime'
            ]);

                $tour = new Tour;
                $tour->location_museum = $request->input('nameMuseum');
                $tour->location_client = $request->input('nameLocation');
                $tour->start_time = $request->input('startTime');
                $tour->end_time = $request->input('endTime');
                $tour->save();
                $message = 'Tour geplant';
                $status = 'success';

            }

            return redirect()->back()->with([
                'message' => $message,
                'status' => $status
            ]);
        }

}
