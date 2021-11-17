<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewControl extends Controller
{
    //
    function show()
    {
        //load data di form
        return view('t5_form');
    }

    function resultWelcome()
    {
        return view('tugas5');

    }
}
