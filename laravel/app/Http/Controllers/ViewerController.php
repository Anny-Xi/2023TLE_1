<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewerController extends Controller
{
    public function waitingPage(){

        return view('waitView');

    }

//    public function countdown($date, $time)
//    {
//        $dateToday = $date. ' '. $time;
//        $now =
//    }
}
