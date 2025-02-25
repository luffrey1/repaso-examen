<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\Pasajero;
use App\Models\Avion;
use Illuminate\Http\Request;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pasajero.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aviones = Avion::all();  
        return view('pasajero.create', compact('aviones'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'nombre' => 'required|min:3',
            'apellidos' => 'required|min:3',
            'edad' => 'required|numeric',
            'asistencia' => 'boolean', 
            'contrasena' => 'required',
            'avion_id' => 'required|exists:avions,id'  // Validación para avion_id

        ]);
        
    
        // Crear el pasajero
        $pasajero = Pasajero::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'edad' => $request->edad,
            'asistencia' => $request->has('asistencia') ? 1 : 0, 
            'contrasena' => Hash::make($request->contrasena),
            'avion_id' => $request->avion_id,  // Asignar el avion_id
        ]);
    
        return redirect()->route('aeropuerto.index')->with('success', 'Registro exitoso.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Pasajero $pasajero)
    {
        return view('', compact('pasajero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasajero $pasajero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasajero $pasajero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasajero $pasajero)
    {
        //
    }
  public function nombre(Request $request)
{
    $nombre = $request->query('pasajero'); // Obtener el nombre desde la URL

    $pasajeros = Pasajero::where('nombre', 'LIKE', '%' . $nombre . '%')->get();

    return view('pasajero.nombre', compact('pasajeros'));
}
public function edades(Request $request) {
    $min = $request->query('min', 0); // Valor por defecto: 0
    $max = $request->query('max', 150); // Valor por defecto: 150

    $pasajeros = Pasajero::whereBetween('edad', [$min, $max])->get();

    return view('pasajero.edad', compact('pasajeros', 'min', 'max'));
}
public function destroyAsistencia(Request $request) {
    Pasajero::where('asistencia', '0')->delete();
    return redirect()->back()->with('success', 'Pasajeros sin asistencia eliminados correctamente.');
}
public function aumentarEdad($incremento) {
    Pasajero::query()->update(['edad' => DB::raw("edad + $incremento")]);
    return redirect()->back()->with('success', 'Edades sumadas correctamente.');
}

}   

