<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contatos extends Controller
{
    public function index()
    {
        return view('contato')
    }
}
