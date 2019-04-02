<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Curso;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all();
        $cursos = Curso::all();
    	$total = Aluno::all()->count();
    	return view('list-alunos', compact('alunos', 'cursos', 'total'));
    }

    public function create(){
        $cursos = Curso::all();
        return view('include-aluno', compact('cursos'));
    }

    public function store(Request $request){
    	$aluno = new Aluno;
        $aluno->name = $request->name;
        $aluno->email = $request->email;
        $aluno->birth = $request->birth;
        $aluno->course = $request->course;
        $aluno->save();

    	return redirect()->route('aluno.index')->with('message', 'Cadastro realizado com sucesso!');
    }

    public function show($id){
    	//
    }

    public function edit($id){
    	$aluno = Aluno::findOrFail($id);
        $cursos = Curso::all();
        return view('alter-aluno', compact('aluno', 'cursos'));
    }

    public function update(Request $request, $id){
    	$aluno = Aluno::findOrFail($id);
        $aluno->name = $request->name;
        $aluno->email = $request->email;
        $aluno->birth = $request->birth;
        $aluno->course = $request->course;
    	$aluno->save();
    	return redirect()->route('aluno.index')->with('message', 'Cadastro alterado com sucesso!');
    }

    public function destroy($id){
    	$aluno = Aluno::findOrFail($id);
    	$aluno -> delete();
    	return redirect()->route('aluno.index')->with('message', 'Aluno excluido com sucesso!');
    }
}
