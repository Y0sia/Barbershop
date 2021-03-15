<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Shedule;

class HomeController extends Controller
{
    public function index()
    {
        $barbers = Barber::all();
        $shedules = Shedule::all();

        return view('home', compact('barbers', 'shedules'));
    }

}
