<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\User;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::get();
        //  dd($emp);
        return view('VistaEmpleados.index', compact('empleados'));
        //  return $emp;  //api
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');
        return view('VistaEmpleados.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $roles = $r->input('roles', []); //obtenemos los roles
        $user = new User();
        $user->nombre_usuario = $r->user;
        $user->correo_electronico = $r->correo;
        $user->password = $r->password;
        $user->syncRoles($roles); //asignamos los roles al usuario
        $user->save();

        $emp = new Empleado();
        $emp->ci = $r->ci;
        $emp->nombre = $r->nombre;
        $emp->apellido =  $r->apellido;
        $emp->telefono =  $r->telefono;
        $emp->foto = 'foto!!';
        $emp->sello = 'sello';
        $emp->firma = 'firma';
        $id_user = User::where('nombre_usuario', $user->nombre_usuario)
            ->first();
        $emp->id_usuario = $id_user->id;
        $emp->save();

        return redirect()->route('Empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //   dd($empleado);
        $roles = Role::all()->pluck('name', 'id');
        $user = User::where('id', $empleado->id_usuario)->first();
        return view('VistaEmpleados.edit', compact('empleado', 'user','roles'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Empleado $empleado)
    {

        $roles = $r->input('roles', []); //obtenemos los roles
        $user = User::where('id', $empleado->id_usuario)->first();
        $user->nombre_usuario = $r->user;
        $user->correo_electronico = $r->correo;
        $user->password = $r->password;
        $user->syncRoles($roles); //asignamos los roles al usuario
        $user->save();

        $emp = $empleado;
        $emp->ci = $r->ci;
        $emp->nombre = $r->nombre;
        $emp->apellido =  $r->apellido;
        $emp->telefono =  $r->telefono;
        $emp->foto = 'foto!!';
        $emp->sello = 'sello';
        $emp->firma = 'firma';
        $id_user = User::where('nombre_usuario', $user->nombre_usuario)
            ->first();
        $emp->id_usuario = $id_user->id;
        $emp->save();


        return redirect()->route('Empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {

        $user = User::where('id', $empleado->id_usuario)->first();
        // dd($user);
        $empleado->delete();
        $user->delete();
        return redirect()->route('Empleado.index');
    }
}
