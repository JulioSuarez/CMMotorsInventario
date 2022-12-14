<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\CategoriaProducto;
use App\Models\Proveedor;
use App\Models\Ubicacion;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orden = DB::table('productos as p')
            ->join('proveedors as x', 'p.id_proveedor', '=', 'x.id')
            ->select(
                'p.id',
                'p.cod_oem',
                'p.cod_sustituto',
                'p.nombre',
                'p.descripcion',
                'p.precio_venta_con_factura',
                'p.precio_venta_sin_factura',
                'p.fecha_expiracion',
                'p.estado',
                'x.nombre_proveedor',
                'x.nombre_proveedor_contacto',
                'p.foto'
            )
            ->orderByDesc('p.id')->paginate(10);
        return view('VistaProductos.index', compact('orden'));
    }

    public function productosMinimos()
    {

        //relacinarlo con categoria, proveevor y ubicaion
        $producto = Producto::get();

        // dd('entre');
        return view('VistasAuth.dashboard', compact('producto'));
    }

    public function create()
    {
        $categorias = CategoriaProducto::get();
        $proveedores = Proveedor::get();
        $one = date('Y-m-d', strtotime('+1 year'));
        return view('VistaProductos.create', compact('proveedores', 'categorias', 'one'));
    }

    public function store(Request $r)
    {
        //dd($r);
        if ($r->hasFile('foto')) {
            $file = $r->file('foto');
            $destino = 'img/fotosProductos/';
            $fotos = time() . '-' . $file->getClientOriginalName();
            $subirImagen = $r->file('foto')->move($destino, $fotos);
        } else {
            $fotos = "default.png"; //DEFAUDL
        }


        $p = new Producto();
        $p->cod_oem = $r->cod_oem;
        $p->cod_sustituto = $r->cod_sustituto;
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->cantidad = $r->cantidad;
        $p->cant_minima = $r->cant_minima;
        $p->precio_venta_con_factura = $r->precio1;
        $p->precio_venta_sin_factura = $r->precio2;
        $p->precio_compra = $r->precio3;
        $p->foto = $fotos;
        $p->fecha_expiracion = $r->fecha_expiracion;
        $p->tienda = $r->tienda;
        $p->unidad = $r->unidad;
        $p->estado = $r->estado;
        $p->estante = $r->estante;
        $p->marca = $r->marca;
        $p->procedencia = $r->procedencia;
        $p->categoria = $r->categoria;
        $p->id_proveedor = $r->proveedor;
        $p->save();


        return redirect()->route('Producto.index');
    }

    public function edit(Producto $p)
    {
        $p = Producto::where('productos.id', $p->id)->first();
        // dd($p);
        $proveedor = Proveedor::get();
        return view('VistaProductos.edit', compact('p','proveedor'));
    }

    public function update(Request $r, Producto $p)
    {
        $p->cod_oem = $r->cod_oem;
        $p->cod_sustituto = $r->cod_sustituto;
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->cantidad = $r->cantidad;
        $p->cant_minima = $r->cant_minima;
        $p->precio1 = $r->precio1;
        $p->precio2 = $r->precio2;
        $p->foto = 'foto';
        $p->fecha_expiracion = $r->fecha_expiracion;
        $p->nombre_tienda = $r->tienda;
        $p->unidad = $r->unidad;
        $p->estado = $r->estado;
        $p->categoria = $r->categoria;
        $p->id_proveedor = $r->proveedor;
        $p->id_ubicacion = $r->ubicacion;
        $p->save();

        return redirect()->route('Producto.index');
    }


    public function showApi($p)
    {
        $p = Producto::where('cod_oem', $p)->first();
        return $p;
    }

    public function show($p)
    {

        $p = Producto::where('cod_oem', $p)->first();

        return $p;
    }


    public function destroy(Producto $p)
    {
        $p->delete();
        return redirect()->route('Producto.index');
    }

    public function index_categoria()
    {
        $categorias = CategoriaProducto::get();
        return view('VistaCategoria.index', compact('categorias'));
    }

    public function create_categoria()
    {
        // dd('se debe crear categoria');
        return view('VistaCategoria.create');
    }

    public function store_categoria(Request $r, CategoriaProducto $c)
    {
        $c = new CategoriaProducto();
        $c->nombre = $r->nombre;
        $c->descripcion = $r->descripcion;
        $c->save();
        return redirect()->route('Producto.index');
    }

    public function edit_categoria(CategoriaProducto $c)
    {
        // dd($c);
        return view('VistaCategoria.edit', compact('c'));
    }

    public function update_categoria(Request $r, CategoriaProducto $c)
    {
        $c->nombre = $r->nombre;
        $c->descripcion = $r->descripcion;
        $c->save();
        return redirect()->route('Producto.index');
    }

    public function delete_categoria(CategoriaProducto $c)
    {
        $c->delete();
        return redirect()->route('Producto.index');
    }

    // public function navar()
    // {
    //     $count = DB::table('productos')->count();
    //     return view('navegador', ['count' => $count]);
    // }
}
