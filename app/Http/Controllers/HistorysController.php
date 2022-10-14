<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorysController extends Controller
{
    public function indexHistorico()
    {
        return view('pages.historico.historico_nav');
    }

    public function indexFavoritos()
    {
        return view('pages.historico.favoritos');
    }

    public function indexEmail()
    {
        return view('pages.historico.email');
    }
}
