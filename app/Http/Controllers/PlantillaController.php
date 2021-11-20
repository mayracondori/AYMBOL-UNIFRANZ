<?php

namespace App\Http\Controllers;

class PlantillaController extends Controller
{

    public function modelo(){
        //metodo inicial
        return view('plantilla.modelo');
    }
    public function modelousuario(){
        //metodo inicial
        return view('plantilla.modelousuario');
    }
    public function modeloadmin(){
        //metodo inicial
        return view('plantilla.modeloadmin');
    }
    public function modelovendedor(){
        //metodo inicial
        return view('plantilla.modelovendedor');
    }

    public function modeloeducador(){
        //metodo inicial
        return view('plantilla.modeloeducador');
    }

}