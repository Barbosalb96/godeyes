<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index()
    {
        return view("pages.localizacao.localizacao");
    }

    public function locationGeo()
    {
        return view("pages.localizacao.localizacaoGeo");
    }
}
