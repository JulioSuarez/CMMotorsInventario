<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Empleado;
use App\Models\CategoriaProducto;
use App\Models\Cliente;
use App\Models\Cotizacion;
use App\Models\DetalleCotizacion;
use App\Models\DetalleVenta;
use App\Models\Estante;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Sector;
use App\Models\Ubicacion;
use App\Models\Venta;


use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     //    \App\Models\User::factory()->create();

        $this->CargaUser();
        $this->cargarDatosPruebas();

    }

     public function CargaUser(){
        $user = new User();
        $user->nombre_usuario = 'Ernesto_Claros';
        $user->correo_electronico = 'admin@cmmotors.net';
        $user->password =  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token =  Str::random(10);
      //  $user->fecha_cambio_contra = date('Y-m-d');
        $user->save();
     }

     public function cargarDatosPruebas(){

        $r = new Empleado();
        $r->ci = 897333;
        $r->nombre = 'Julio Cesar ';
        $r->apellido =  'Suarez';
        $r->telefono =  110;
        $r->foto =  'foto';
        $r->firma =  'firmia';
        $r->sello =  'firmia';
        $r->id_usuario = '1';
        $r->save();


        $r = new Cliente();
        $r->ci = 75432;
        $r->nombre = 'Mauricio';
        $r->apellido =  'Guitierrez';
       // $r->nit =  ;
        $r->email =  'mauricio442@gmail.com';
      //  $r->telefono =  101;
      //  $r->direccion = ;
        $r->save();


      //   $r = new Sector();
      //   $r->id = 101;
      //   $r->nombre = 'Almacen de Ferreteria';
      //   $r->descripcion =  'ESte es un almacen de ferreteria';
      //   $r->save();


      //   $r = new Estante();
      //   $r->id = 01;
      //   $r->nombre = 'Sector 2';
      //   $r->descripcion =  'ESte es un sector 2';
      //   $r->nro_columnas =  4;
      //   $r->nro_filas =  5;
      //   $r->id_sector =  101;
      //   $r->save();


      //   $r = new Ubicacion();
      //   $r->id = 33;
      //   $r->codigo_ubi = 'Estante A1';
      //   $r->codigo_estantes =  01;
      //   $r->save();


        $r = new CategoriaProducto();
        $r->id = 1;
        $r->nombre = 'Amortiguadores Ligeros';
        $r->descripcion =  'Linea de amortiguadores para vehiculos ligeros';
        $r->save();

        $r = new CategoriaProducto();
        $r->id = 2;
        $r->nombre = 'Consumibles de Construccion en polvo';
        $r->descripcion =  'Cementos, Estuco, etc.';
        $r->save();


        $r = new Proveedor();
        $r->id = 2001;
        $r->nombre = 'INDUSTRIA LOCAL';
        $r->nit = 11111;
        $r->tipo =  'PROVEEDOR DE PRODUCTOS EN GENERAL'; //para que es tipo???
        $r->save();


        $r = new Producto();
        $r->id = 1;
        $r->cod_oem = 'CEM1001';
        $r->cod_sustituto =  'SUS2001';
        $r->nombre =  'Cemento Fancesa';
        $r->descripcion =  'Bolsa de 50 Kilos';
        $r->cantidad =  100;
        $r->cant_minima = 20;
        $r->marca = 'Fancesa';
        $r->procedencia = 'Santa Cruz';
        $r->precio1 = 50;
        $r->precio2 = 45;
        $r->foto = 'foto';
        $r->fecha_expiracion = '2024-09-11';
        $r->tienda = 'FERRETERIA'; //crear una class o esto a que pertence ya que ya existe proveedor
        $r->unidad = 'Bolsa';
        $r->estado = 'DISPONIBLE';
        $r->categoria = 2;
        $r->id_proveedor = 2001;
        $r->estante = 'B4';
        $r->save();

        $r = new Producto();
        $r->id = 2;
        $r->cod_oem = 'OEM0001';
        $r->cod_sustituto =  'SUS0001';
        $r->nombre =  'Amortiguador';
        $r->cantidad =  40;
        $r->cant_minima = 5;
        $r->marca = 'Steel';
        $r->procedencia = 'USA';
        $r->id_proveedor = 2001;
        $r->descripcion =  'Descripcion producto amortiguador';
        $r->unidad = 'Pzas';
        $r->precio1 = 1800;
        $r->precio2 = 1280;
       // $r->fecha_expiracion = '';
        $r->tienda = 'Repuestos';
        $r->estante = 'A2';
        $r->estado = 'DISPONIBLE';
        $r->foto = 'foto';
        $r->categoria = 1;
        $r->save();

        $r = new Producto();
        $r->id = 3;
        $r->cod_oem = 'OEM0002';
        $r->cod_sustituto =  'SUS0002';
        $r->nombre =  'Amortiguador 2';
        $r->cantidad =  30;
        $r->cant_minima = 5;
        $r->marca = 'Rhino Nitro';
        $r->procedencia = 'USA';
        $r->id_proveedor = 2001;
        $r->descripcion =  'Descripcion producto amortiguador';
        $r->unidad = 'Pzas';
        $r->precio1 = 1630;
        $r->precio2 = 1300;
       // $r->fecha_expiracion = ;
        $r->tienda = 'Repuestos';
        $r->estante = 'A3';
        $r->estado = 'DISPONIBLE';
        $r->foto = 'foto';
        $r->categoria = 1;
        $r->save();


        $r = new Cotizacion();
        $r->id = 1001;
        $r->monto_total = 120.00;
        $r->fecha_realizada =  '2022-08-29 ';
        $r->fecha_validez =  '2022-09-08 ';
        $r->hora =  '20:15:07';
        $r->estado =  'finalizado';  //se hizo la cotizacion y luego la compra
        $r->ci_cliente = 75432;
        $r->ci_empleado =  897333;
        $r->save();


        $r = new DetalleCotizacion();
        $r->id = 22;
        $r->cantidad = 3;
        $r->precio =  120.00;
        $r->id_producto = 1;
        $r->id_cotizacion = 1001;
        $r->save();


        $r = new Venta();
        $r->id = 501;
        $r->monto_total = 120;
        $r->fecha =  '2022-08-30';
        $r->hora =  '20:15:07';
        $r->ci_cliente = 75432;
        $r->ci_empleado =  897333;
        $r->save();


        $r = new DetalleVenta();
        $r->id = 1111;
        $r->cantidad = 3;
        $r->precio =  120;
        $r->id_producto = 3 ;
        $r->id_venta = 501;
        $r->save();




     }




}
