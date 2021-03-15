<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Shedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $barbers = Barber::all();
        $shedules = Shedule::all();

        //dd($shedules);

        return view('home', compact('barbers', 'shedules'));
    }

}
