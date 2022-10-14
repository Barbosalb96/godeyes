<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function indexWifi()
    {
        return view('pages.block.wifi');
    }

    public function indexsite()
    {
        return view('pages.block.site');
    }

    public function indexApps()
    {
        return view('pages.block.apps');
    }
}
