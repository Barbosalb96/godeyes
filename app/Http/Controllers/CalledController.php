<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalledController extends Controller
{
    public function index()
    {
        return view('pages.functions.chamadas');
    }

}
