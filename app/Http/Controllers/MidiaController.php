<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidiaController extends Controller
{
    public function indexPhoto()
    {
        return view('pages.functions.fotos');
    }

    public function indexVideo()
    {
        return view('pages.functions.videos');
    }

    public function screenrecorder()
    {
        return view('pages.screenrecorder.index');
    }
}
