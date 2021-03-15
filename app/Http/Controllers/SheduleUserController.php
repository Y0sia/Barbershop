<?php

namespace App\Http\Controllers;

use App\Models\SheduleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SheduleUserController extends Controller
{
    public function make(Request $request)
    {
        $request->validate([
           'shedule_id' => 'required|integer',
        ]);
        $shedule_user = SheduleUser::create([
            'shedule_id' => $request->shedule_id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->home();

    }
}
