<?php

namespace App\Http\Controllers;
use App\Models\Pasajero;
use App\Models\Avion;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aviones = Avion::all();
        $pasajeros = Pasajero::all();
        return view('aeropuerto', compact('aviones', 'pasajeros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('avion.create');
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $avion = Avion::create($request->all());
        return redirect()->route('aeropuerto.index')->with('success', 'Avión creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $avion = Avion::findOrFail($id); // Esto trae solo un avión por su ID
        return view('avion.show', compact('avion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $avion = Avion::findOrFail($id); // Buscar el avión por ID
        return view('avion.edit', compact('avion'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $avion = Avion::findOrFail($id);
        $avion->update($request->all());    

        return redirect()->route('aeropuerto.index')->with('success', 'Avión actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $avion = Avion::findOrFail($id);
        $avion->delete();
        return redirect()->route('aeropuerto.index')->with('success', 'Avión eliminado exitosamente.');
    }
}
