<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CVController extends Controller
{
    // Muestra la lista de CVs
    public function index()
    {
        $cvs = CV::all();
        return view('cvs.index', compact('cvs'));
    }

    // Muestra el formulario para crear un CV
    public function create()
    {
        return view('cvs.create');
    }

    // Almacena un nuevo CV
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'educacion' => 'required|string',
            'experiencia' => 'required|string',
            'habilidades' => 'required|string',
            'idiomas' => 'required|string',
        ]);

        CV::create($request->all());

        return redirect()->route('cvs.index')->with('success', 'CV creado exitosamente.');
    }

    // Muestra el formulario para editar un CV
    public function edit($id)
    {
        $cv = CV::findOrFail($id);
        return view('cvs.edit', compact('cv'));
    }

    // Actualiza un CV existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'educacion' => 'required|string',
            'experiencia' => 'required|string',
            'habilidades' => 'required|string',
            'idiomas' => 'required|string',
        ]);

        $cv = CV::findOrFail($id);
        $cv->update($request->all());

        return redirect()->route('cvs.index')->with('success', 'CV actualizado exitosamente.');
    }

    // Elimina un CV
    public function destroy($id)
    {
        $cv = CV::findOrFail($id);
        $cv->delete();

        return redirect()->route('cvs.index')->with('success', 'CV eliminado exitosamente.');
    }
}
