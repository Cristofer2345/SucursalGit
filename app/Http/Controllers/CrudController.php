<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index()
    {
        $datos = DB::select("select * from sucursal");
        return view('welcome')->with('datos', $datos);
    }

    public function create(request $request){
        $sql = DB::insert('INSERT INTO sucursal (nombre, lugar, direccion, email, encargado, telefono, hora_apertura, hora_cierre) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)', [
            $request -> txtNombre,
            $request -> txtLugar,
            $request -> txtDireccion,
            $request -> txtEmail,
            $request -> txtEncargado,
            $request -> txtTelefono,
            $request -> txtHora_apertura,
            $request -> txtHora_cierre        
        ]);
    
     
    if($sql ==true){
        return back()->with("correcto, registrado");
    }else {
        return back()->with("incorrecto, no registrado");
    }
}
  public function mostrar(){
    $datos = DB::select("select * from sucursal");
    return view('sucursal')->with('datos', $datos);
    }

    public Function buscar(request $request){
        $busqueda = $request->buscar;
        $datos = DB::select("SELECT * FROM sucursal WHERE nombre LIKE ?", ["%$busqueda%"]);
        return view('welcome', ['datos' => $datos]);
    }
};