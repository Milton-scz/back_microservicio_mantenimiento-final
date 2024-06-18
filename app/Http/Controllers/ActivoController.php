<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    public function index()
    {
        $activos = Activo::all();
        return response()->json($activos);
    }

    public function show($id)
    {
        $activo = Activo::find($id);

        if (!$activo) {
            return response()->json(['error' => 'Activo no encontrado'], 404);
        }

        return response()->json($activo);
    }

    public function store(Request $request)
{
    try {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
            'responsable' => 'required|string|max:255',
            'costo' => 'required|numeric',
            'estado' => 'required|string|in:Proceso,Finalizado,En espera',
        ]);

        $activo = Activo::create($request->all());

        return response()->json($activo, 201);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error interno del servidor al crear el activo: ' . $e->getMessage()], 500);
    }
}



    public function update(Request $request, $id)
    {
        $activo = Activo::find($id);

        if (!$activo) {
            return response()->json(['error' => 'Activo no encontrado'], 404);
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
            'responsable' => 'required|string|max:255',
            'costo' => 'required|numeric',
            'estado' => 'required|string|in:Proceso,Finalizado,En espera',
        ]);

        $activo->update($request->all());

        return response()->json($activo);
    }

    public function destroy($id)
    {
        $activo = Activo::find($id);

        if (!$activo) {
            return response()->json(['error' => 'Activo no encontrado'], 404);
        }

        $activo->delete();

        return response()->json(null, 204);
    }
}
