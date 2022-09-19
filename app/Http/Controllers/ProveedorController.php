<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::table('proveedors')->paginate(10);
        //  dd($ps);
        return view('VistaProveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaProveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $p = new Proveedor();
        $p->nombre_proveedor  = $r->nombre;
        $p->proveedor_direccion  = $r->direccion;
        $p->proveedor_telefono  = $r->telefono;
        $p->proveedor_correo  = $r->correo;
        $p->nombre_proveedor_contacto  = $r->contacto;
        $p->nit = $r->nit;
        $p->tipo = $r->tipo;
        $p->save();
        return redirect()->Route('Proveedor.index');
    }


    public function show($id)
    {
        //
    }

    public function edit(Proveedor $p)
    {
        return view('VistaProveedores.edit', compact('p'));
    }

    public function update(Request $r, Proveedor $p)
    {

        $p->nombre_proveedor  = $r->nombre;
        $p->proveedor_direccion  = $r->direccion;
        $p->proveedor_telefono  = $r->telefono;
        $p->proveedor_correo  = $r->correo;
        $p->nombre_proveedor_contacto  = $r->contacto;
        $p->nit = $r->nit;
        $p->tipo = $r->tipo;
        $p->save();
        return redirect()->Route('Proveedor.index');
    }

    public function destroy(Proveedor $p)
    {
        $p->delete();
        return redirect()->Route('Proveedor.index');
    }
}
