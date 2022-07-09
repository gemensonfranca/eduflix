<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index() {

        $cursos = Curso::all();

        return view('cursos', ['cursos' => $cursos]);
    }

    public function relatorio() {

        $cursos = Curso::all();

        return view('matriz', ['cursos' => $cursos]);
    }

    public function store(Request $request) {

        $cadastrar = new Curso;

        $cadastrar->nome = $request->nome;
        $cadastrar->descricao = $request->descricao;
        $cadastrar->valor = $request->valor;
        $cadastrar->inicio = $request->inicio;
        $cadastrar->termino = $request->termino;
        $cadastrar->quantidade = $request->quantidade;

        // UPLOAD
        if ($request->hasFile('upload') && $request->file('upload')->isValid()) {
            
            $requestUpload = $request->upload;

            $extension = $requestUpload->extension();

            $uploadName = md5($requestUpload->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestUpload->move(public_path('img/uploads'), $uploadName);

            $cadastrar->upload = $uploadName;
        }

        $cadastrar->save();

        return view('confirma');
    }

    public function show($id) {
        
        $curso = Curso::findOrFail($id);

        return view('curso', ['curso' => $curso]);
    }

    public function destroy($curso) {

        Curso::findOrFail($curso)->delete();

        return redirect('/matriz');
    }
}
