<?php

namespace App\Http\Controllers;

use App\Models\Tour;
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


        $tours = Tour::whereDate('start_time', '>', date('Y-m-d H:i:s')
        )->get();
        return view('listTour', ['tours' => $tours]);

    }

    public function tourEnter()
    {
        if (!Auth::check()) {
            $this->middleware('auth');
            return redirect('/')->with([
                'message' => 'Je bent niet ingelogd.!',
                'status' => 'danger'
            ]);
        }
        $theNextTour = DB::table('tour')->latest('start_time')->first();

    }
}
