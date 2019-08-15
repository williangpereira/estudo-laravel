<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->take(3);

        return view('home')->with('produtos', $produtos);
    }
}
