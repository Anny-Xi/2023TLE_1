<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use DateTime;
use Illuminate\Support\Facades\Auth;

class ViewerController extends Controller
{
    public function waitingPage($id)
    {

        if (!Auth::check()) {
            $this->middleware('auth');
            return redirect('/')->with([
                'message' => 'Je bent niet ingelogd.!',
                'status' => 'danger'
            ]);
        }
        $tour = Tour::find($id);
        $currentDateTime = new DateTime(date('Y-m-d H:i:s'));
        $tourEnd = new DateTime($tour->end_time);
        $tourEnd->modify('+1 hour');

        if ($tourEnd < $currentDateTime) {
            return redirect('/home')->with([
                'message' => 'Tour is afgelopen!',
                'status' => 'danger'
            ]);
        }

        $oldTourDateTime = new DateTime($tour->start_time);
        $tourDateTime = $oldTourDateTime->format('M j, Y H:i:s');
//        $tourDateTime = Str::of($tour->start_time)->explode(' ');
//        $tourTime = Str::of($tourDateTime->skip(1)->first())->explode(':');

//        return view('waitView', compact('tour','tourTime','tourDateTime'));
        return view('waitView', compact('tour', 'tourDateTime'));

    }

}
