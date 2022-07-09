<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    public function store(Request $request) {
        $registro = new Registro;

        $registro->nome = $request->nome;
        $registro->email = $request->email;
        $registro->usuario = $request->usuario;
        $registro->senha = $request->senha;
        $registro->conf_senha = $request->conf_senha;

        $registro->save();

        return view('login');
    }
}
