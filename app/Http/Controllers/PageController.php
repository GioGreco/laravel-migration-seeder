<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function leavingToday(){
        $train = Train::where('departure_hour' == 2);
        return view('today', compact('train'));
    }
}
