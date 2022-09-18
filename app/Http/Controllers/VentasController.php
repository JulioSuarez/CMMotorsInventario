<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Cliente;

use Illuminate\Support\Facades\Auth;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::get();
        return view('VistaVentas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
   //  dd('Holaa');
        $clientes = Cliente::get();
        $user = Auth::user()->id;
      // dd($user);
        $empleado = Empleado::join('users','users.id','=',
        'empleados.id_usuario')->select('empleados.*','users.nombre_usuario')
        ->where('id_usuario',$user)->first();

        $productos = Producto::get();
        return view('VistaVentas.create',compact('clientes','empleado','productos'));
    }


    public function store(Request $r){
  //     dd($r);
        $v = new Venta();
        $v->monto_total = $r->monto_total;
        $v->fecha = date('Y-m-d'); //hacerlo automatico
        $v->hora = date('H:i:s');  //hacerlo automatico
        $v->ci_cliente = $r->ci_cliente;
        $v->ci_empleado = $r->ci_empleado; //dacar el nombre del empleado
        $v->save();
    // dd($r->nit);
    //dd(count($r->cod_oem));
      //  falta cargar empres, nit , telefono
        for ($i=0; $i < count($r->cod_oem) ; $i++) {
            $d = new DetalleVenta();
         //   $d->detalle = $r->detalles[$i];
            $d->cantidad = $r->cantidad[$i];
            $d->precio =  $r->precio[$i];
            $d->id_producto = $r->cod_oem[$i] ;
            $d->id_venta = $v->id;
            $d->save();
        }

        return redirect()->Route('Venta.index')
            ->with('VentasRegistrada','Venta Registrada con exito');

    }

    public function show(Venta $venta){
      //  dd($venta);


        $ventas = DetalleVenta::join('productos as p','p.id','=','detalle_ventas.id_producto')
                            ->select('detalle_ventas.*','p.cod_oem','p.nombre as nombre_producto')
                            ->where('detalle_ventas.id_venta',$venta->id)->get();


        $venta = Venta::join('empleados as e','e.ci','=','ventas.ci_empleado')
                        ->join('clientes as c','c.ci','=','ventas.ci_cliente')
                        ->select('ventas.*','e.nombre as nombre_empleado','c.nombre as nombre_cliente'
                                    ,'c.apellido')
                        ->where('ventas.id',$venta->id)->first();
                     //  dd($venta);

        return view('VistaVentas.show',compact('ventas','venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta){
        //asociar venta con detalles de venta y producto y con el cliente
        $ventas = DetalleVenta::join('productos as p','p.id','=','detalle_ventas.id_producto')
                            ->select('detalle_ventas.*','p.cod_oem','p.nombre as nombre_producto')
                            ->where('detalle_ventas.id_venta',$venta->id)->get();


        $cliente = Venta::join('empleados as e','e.ci','=','ventas.ci_empleado')
                        ->join('clientes as c','c.ci','=','ventas.ci_cliente')
                        ->select('ventas.*','e.nombre as nombre_empleado','c.nombre as nombre_cliente'
                                    ,'c.apellido')
                        ->where('ventas.id',$venta->id)->first();
                   // dd($ventas);
        return view('VistaVentas.edit',compact('ventas','cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Venta $venta){

      //  dd($r);
        $venta->monto_total = $r->monto_total;
      //  $venta->fecha = date('Y-m-d'); //no se actualizarian
      //  $venta->hora = date('H:i:s');  //no se actualizarian
        $venta->ci_cliente = $r->ci_cliente;
        $venta->ci_empleado = $r->ci_empleado; //dacar el nombre del empleado
        $venta->save();

        for ($i=0; $i < count($r->id_detalle_venta) ; $i++) {
            $d = DetalleVenta::where('id',$r->id_detalle_venta[$i])->first();
        //    dd($d);
         //   $d->detalle = $r->detalles[$i];
            $d->cantidad = $r->cantidad[$i];
            $d->precio =  $r->precio[$i];
            $d->id_producto = $r->id_producto[$i] ;
            $d->id_venta = $venta->id;
            $d->save();
        }

        return redirect()->Route('Venta.index')
            ->with('VentasUpdate','Venta Actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta){
     //   $id=$venta->id;
        $venta->delete();

        return redirect()->route('Venta.index')->with('RegistroEliminado', $venta->id);
    }


    //cotizaciones

}
