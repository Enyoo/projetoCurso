<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Aluno;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
    	$alunos = Aluno::all();
    	$total = Curso::all()->count();
    	return view('list-cursos', compact('cursos', 'alunos', 'total'));
    }

    public function create(){
    	return view('include-curso');
    }

    public function store(Request $request){
    	$curso = new Curso;
        $curso->course = $request->course;
        $curso->description = $request->description;
        $curso->save();

    	return redirect()->route('curso.index')->with('message', 'Curso criado com sucesso');
    }

    public function show($id){
        //
    }

    public function edit($id){
    	$curso = Curso::findOrFail($id);
    	return view('alter-curso', compact('curso'));
    }

    public function update(Request $request, $id){
    	$curso = Curso::findOrFail($id);
        $curso->course = $request->course;
        $curso->description = $request->description;
    	$curso->save();
    	return redirect()->route('curso.index')->with('message', 'Curso alterado com sucesso!');
    }

    public function destroy($id){
    	$curso = Curso::findOrFail($id);
    	$curso -> delete();
    	return redirect()->route('curso.index')->with('message', 'Curso excluido com sucesso!');
    }
}
