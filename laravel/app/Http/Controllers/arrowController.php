<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Support\Facades\Auth;


class arrowController extends Controller
{
    public function livePage($id)
    {
        if (!Auth::check()) {
            $this->middleware('auth');
            return redirect('/')->with([
                'message' => 'Je bent niet ingelogd.!',
                'status' => 'danger'
            ]);
        }
        $tour = Tour::find($id);
        $currentDateTime = date('Y-m-d H:i:s');

        if ($tour->end_time<=$currentDateTime){
            return redirect('/home')->with([
                'message' => 'Het live is afgelopen.!',
                'status' => 'danger'
            ]);
        }

        return view('liveView', compact('tour'));
    }

}
