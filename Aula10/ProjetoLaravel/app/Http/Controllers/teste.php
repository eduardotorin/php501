<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teste extends Controller
{
    public function index()
    {
        return view('teste');
    }
    public function soma()
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        $resultado = $n1 + $n2;
        return view('soma',array('resultado' => $resultado));
    }
}
