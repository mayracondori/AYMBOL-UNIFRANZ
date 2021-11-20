<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use App\Models\Tipoauto;
use App\Models\Combustible;
use App\Models\Tipotrans;
use App\Models\Traccion;
use Illuminate\Http\Request;
class VendedorController extends Controller
{

    public function index(){
        //metodo inicial
        return view('vendedor.index');
    }
    public function listamotos(){
        //metodo inicial
        return view('vendedor.listamotos');
    }
    public function listaautos(){
        //metodo inicial
        return view('vendedor.listaautos');
    }
    
    public function registromoto(){
        //metodo inicial
        return view('vendedor.registromoto');
    }
    public function registroauto(){
        //metodo inicial
        return view('vendedor.registroauto');
    }
    public function detalleautos(){
        //metodo inicial
        return view('vendedor.detalleautos');
    }
    public function detallemotos(){
        //metodo inicial
        return view('vendedor.detallemotos');
    }
    public function nuevotipoauto(){
        //metodo inicial
        return view('vendedor.nuevotipoauto');

    }
    public function nuevocombustible(){
        //metodo inicial
        return view('vendedor.nuevocombustible');
    }
    public function nuevotipotrans(){
        //metodo inicial
        return view('vendedor.nuevotipotrans');
    }
    public function nuevatraccion(){
        //metodo inicial
        return view('vendedor.nuevatraccion');
    }
    public function nuevoauto(Request $request )
    {
        $coneccion = mysqli_connect ("localhost", "root", "" );
        $basededatos = 'aymbol1';
        $bd =mysqli_select_db ($coneccion, $basededatos);
       
        $milogueo= session('Correo_inst');    
        $c123 = "SELECT * FROM institucion where Correo_inst='$milogueo'";
        $r1 = mysqli_query($coneccion, $c123);
        
        while ($re = mysqli_fetch_array($r1)) {
          $milogueoid=$re ['Id_inst']; 
          
        }
      
        
        $auto = new Auto;
        $auto->Id_tipoauto=$request->Id_tipoauto;
        $auto->Id_inst=$milogueoid; 
        $auto->Id_ciudad=$request->Id_ciudad;
        $auto->Id_combustible=$request->Id_combustible;
        $auto->Marca_auto=$request->Marca_auto;
        $auto->Modelo_auto=$request->Modelo_auto;
        $auto->Color_auto=$request->Color_auto;
        $auto->ModAnio_auto=$request->ModAnio_auto;
        $auto->Motor_auto=$request->Motor_auto;
        $auto->Id_tipotrans=$request->Id_tipotrans;
        $auto->Id_traccion=$request->Id_traccion;
        $auto->Numpuertas_auto=$request->Numpuertas_auto;
        $auto->Numasientos_auto=$request->Numasientos_auto;
        $auto->Documento_auto=$request->Documento_auto;
        $auto->Precio=$request->Precio;
        $auto->Garantia_auto=$request->Garantia_auto;
        $auto->Stock_auto=1;
       
        
        if($request->hasFile('avatar')){

            $auto->Foto_auto=$request->file('avatar')->store('public');

           }
        $auto->save();
        return redirect()->route('vendedor.index');
   
    }
    public function nuevamoto(Request $request )
    {
  
        $coneccion = mysqli_connect ("localhost", "root", "" );
        $basededatos = 'aymbol1';
        $bd =mysqli_select_db ($coneccion, $basededatos);
                
            $milogueo= session('Correo_inst');    
            $c123 = "SELECT * FROM institucion where Correo_inst='$milogueo'";
            $r1 = mysqli_query($coneccion, $c123);

while ($re = mysqli_fetch_array($r1)) {
  $milogueoid=$re ['Id_inst']; 
  
}
        $moto = new Auto;
        //$auto->Id_tipoauto=;
        $moto->Id_inst=$milogueoid; 
        $moto->Id_ciudad=$request->Id_ciudad;
        $moto->Id_combustible=$request->Id_combustible;
        $moto->Marca_auto=$request->Marca_auto;
        $moto->Modelo_auto=$request->Modelo_auto;
        $moto->Color_auto=$request->Color_auto;
        $moto->ModAnio_auto=$request->ModAnio_auto;
        $moto->Motor_auto=$request->Motor_auto;
        //$auto->Id_tipotrans=$request->Id_tipotrans;
        //$auto->Id_traccion=$request->Id_traccion;
        //$auto->Numpuertas_auto=$request->Numpuertas_auto;
        //$auto->Numasientos_auto=$request->Numasientos_auto;
        $moto->Documento_auto=$request->Documento_auto;
        $moto->Precio=$request->Precio;
        $moto->Garantia_auto=$request->Garantia_auto;
        $moto->Stock_auto=1;
       
        
        if($request->hasFile('avatar')){

            $moto->Foto_auto=$request->file('avatar')->store('public');

           }
        $moto->save();
        return redirect()->route('vendedor.index');
   
    }
    public function nuevotipoauto1(Request $request )
    {
  
        $nuevo = new Tipoauto;
        $nuevo->Nom_tipoauto=$request->Nom_tipoauto;
        $nuevo->save();
        return redirect()->route('vendedor.registroauto');
   
    }
    public function nuevocombustible1(Request $request )
    {
  
        $nuevo = new Combustible;
        $nuevo->Nom_combustible=$request->Nom_combustible;
        $nuevo->save();
        return redirect()->route('vendedor.registroauto');
   
    }
    public function nuevotipotrans1(Request $request )
    {
  
        $nuevo = new Tipotrans;
        $nuevo->Nom_tipotrans=$request->Nom_tipotrans;
        $nuevo->save();
        return redirect()->route('vendedor.registroauto');
   
    }
    public function nuevatraccion1(Request $request )
    {
  
        $nuevo = new Traccion;
        $nuevo->Nom_traccion=$request->Nom_traccion;
        $nuevo->save();
        return redirect()->route('vendedor.registroauto');
   
    }



}