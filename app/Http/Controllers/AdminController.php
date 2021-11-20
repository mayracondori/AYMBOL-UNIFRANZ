<?php

namespace App\Http\Controllers;
use App\Models\Informacion;
use Illuminate\Http\Request;
class AdminController extends Controller
{

    public function index(){
        //metodo inicial
        return view('admin.index');
    }
    public function inicio(){
        //metodo inicial
        return view('admin.inicio');
    }
    public function nuevainformacion(){
        //metodo inicial
        return view('admin.nuevainformacion');
    }
    public function listainformacion(){
        //metodo inicial
        return view('admin.listainformacion');
    }
    public function listaautos(){
        //metodo inicial
        return view('admin.listaautos');
    }
    public function listamotos(){
        //metodo inicial
        return view('admin.listamotos');
    }
    public function vendedores(){
        //metodo inicial
        return view('admin.vendedores');
    }
    public function autoescuelas(){
        //metodo inicial
        return view('admin.autoescuelas');
    }
    public function detalleinst(){
        //metodo inicial
        return view('admin.detalleinst');
    }

    public function nuevainfo(Request $request )
    {
        
      
        
        $informacion = new Informacion;
        $informacion->Id_tipoinfo=$request->Id_tipoinfo;
        $informacion->Id_usu=2;
        $informacion->Titulo_info =strtoupper($request->Titulo_info);
        $informacion->Descripcion_info=$request->Descripcion_info;   
        $informacion->Fuente_info=$request->Fuente_info;
        
        if($request->hasFile('avatar')){

            $informacion->Imagen_info=$request->file('avatar')->store('public');

           }
        $informacion->save();
        return redirect()->route('admin.index');
   
    }
}