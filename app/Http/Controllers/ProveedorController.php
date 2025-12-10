<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                // Reglas de validación
                'nombre' => ['required','string','max:130','regex:/^[\pL]+$/u'],
                'direccion' => ['required','string','max:200'],
                'telefono' => ['required','string','max:15','regex:/^\+?[0-9]{7,15}$/'],
                'email' => ['required','string','email','max:100','unique:proveedores,email'],

            ],
            [
                // Mensajes de error personalizados
                'nombre.required' => 'El nombre es obligatorio.',
                'nombre.regex' => 'El nombre solo debe contener letras.',
                'direccion.required' => 'La dirección es obligatoria.',
                'telefono.required' => 'El teléfono es obligatorio.',
                'telefono.regex' => 'El teléfono debe ser un número válido.',
                'telefono.unique' => 'El teléfono ya está en uso.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'El correo electrónico debe ser una dirección válida.',
                'email.unique' => 'El correo electrónico ya está en uso.',
            ]
        );
        Proveedor::create($data);
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
