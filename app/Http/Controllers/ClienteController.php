<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use Dompdf\Dompdf;
use PDF;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        //dd($clientes);
        return view('VistaClientes.index', compact('clientes'));
    }

    public function indexApi()
    {
        $clientes = Cliente::get();
        //dd($clientes);
        //  return view('VistaClientes.index', compact('clientes'));
        return $clientes;
    }

    public function showApi(Cliente $ci)
    {
        //  $clientes = Cliente::first();
        //dd($clientes);
        //  return view('VistaClientes.index', compact('clientes'));
        return $ci;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaClientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        //   dd('llegue');
        $c = new Cliente();
        $c->ci = $r->ci;
        $c->nombre = $r->nombre;
        $c->apellido =  $r->apellido;
        // $c->nit =  $r->nit;
        // $c->email = $r->emial;
        // $c->telefono =  $r->telefono;
        //$c->direccion = $r->direccion;
        $c->save();

        return redirect()->route('Cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::where('ci', $id)->first();
        // dd($cliente);
        return view('VistaClientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Cliente $cliente)
    {
        // dd($id->ci);
        $cliente->ci = $r->ci;
        $cliente->nombre = $r->nombre;
        $cliente->apellido =  $r->apellido;
        //  $c->nit =  $r->nit;
        //  $c->email = $r->emial;
        //  $c->telefono =  $r->telefono;
        // $c->direccion = $r->direccion;
        $cliente->save();

        return redirect()->route('Cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {

        $cliente->delete();

        return redirect()->route('Cliente.index');
    }

    public function variables()
    {
        $clientes = Cliente::get();
        //dd($clientes);
        return view('VistaClientes.lista', compact('clientes'));
    }
    public function pdf()
    {

        $clientes = Cliente::get();
        //  $pdf = PDF::loadView('VistaClientes.lista', ['clientes'=>$clientes]);
        //   return $pdf->stream('test1.pdf');
    }
}
