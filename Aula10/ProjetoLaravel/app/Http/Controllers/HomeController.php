<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function vendas()
    {
        $produtos = [
            'Produto1' => 'Banana',
            'Produto2' => 'Maca',
            'Produto3' => 'Melao',
            'Titulo' => 'Produtos',
        ];
        return view('vendas')->with($produtos);
    }
}
