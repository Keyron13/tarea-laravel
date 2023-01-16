<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
   
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index', compact('notas'));
    }

    
     
    public function create()
    {
        return view('notas.crear');
    }

    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->nota1 = $request->nota1;
        $nota->nota2 = $request->nota2;
        $nota->nota3 = $request->nota3;
        $promedio=($request->nota1+$request->nota2+$request->nota3)/3;
        $nota->promedio=$promedio;
        $nota->save();
        return redirect('/notas');
    }

    

    
    public function edit($id)
    {
        $nota = Nota::find($id);
        return view('notas.edit', compact('nota'));
    }

  
    public function update(Request $request, $id)
    {
        $nota = Nota::find($id);
        $nota->nota1 = $request->nota1;
        $nota->nota2 = $request->nota2;
        $nota->nota3 = $request->nota3;
        $promedio=($request->nota1+$request->nota2+$request->nota3)/3;
        $nota->promedio=$promedio;
        $nota->save();
        return redirect('/notas');
    }

   
    public function destroy($id)
    {
        Nota::find($id)->delete();
        return redirect('/notas');

    }
}
