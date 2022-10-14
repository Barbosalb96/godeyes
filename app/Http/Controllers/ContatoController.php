<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Repositories\Interfaces\ContactInterface;
use Illuminate\Http\Request;

class ContatoController extends Controller
{


    public function index()
    {
        $contacts = Contact::where('user_id', auth()->user()->id)->get();
        return view('pages.functions.index', [
            'contacts' => $contacts
        ]);
    }

    public function detail(int $id)
    {
        $contacts = Contact::query()->findOrFail($id);
        return view('pages.detailcontact', [
            'contacts' => $contacts
        ]);
    }

    public function monitoramento()
    {
        return view('pages.monitoramento_palavra.index');
    }


}

