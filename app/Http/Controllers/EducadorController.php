<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\Contenido;
use App\Models\Conncurso;
use App\Models\Preguntaevaluacion;
use App\Models\Respuestaevaluacion;
use Illuminate\Http\Request;

class EducadorController extends Controller
{

    public function index(){
        //metodo inicial
        return view('educador.index');
    }

    public function contenido(){
        //metodo inicial
        return view('educador.contenido');
    }
    public function evaluacionesrevisadas(){
        //metodo inicial
        return view('educador.evaluacionesrevisadas');
    }
    public function verevaluacionpararevisar(){
        //metodo inicial
        return view('educador.verevaluacionpararevisar');
    }
    public function verevaluacionrevisada(){
        //metodo inicial
        return view('educador.verevaluacionrevisada');
    }
    public function evaluacionesporrevisar(){
        //metodo inicial
        return view('educador.evaluacionesporrevisar');
    }
    public function listacursosmoto(){
        //metodo inicial
        return view('educador.listacursosmoto');
    }
    public function listaestudiantes(){
        //metodo inicial
        return view('educador.listaestudiantes');
    }
    
    
    public function detallecurso(){
        //metodo inicial
        return view('educador.detallecurso');
    }
    public function detallecontenido(){
        //metodo inicial
        return view('educador.detallecontenido');
    }
    
    public function reportecursos(){
        //metodo inicial
        return view('educador.reportecursos');
    }
    
    public function reportelista(){
        //metodo inicial
        return view('educador.reportelista');
    }
    public function listacursosauto(){
        //metodo inicial
        return view('educador.listacursosauto');
    }
    public function nuevocontenido(){
        //metodo inicial
        return view('educador.nuevocontenido');
    }
    public function nuevaevaluacion(){
        //metodo inicial
        return view('educador.nuevaevaluacion');
    }
    public function nuevocurso(){
        //metodo inicial
        return view('educador.nuevocurso');
    }
    public function nuevaev(Request $request )
    {

      
        
        $pre1 = new Preguntaevaluacion;
        $pre1->Id_curso=$request->Id_curso;
        $pre1->Pregunta_pre =strtoupper($request->pre1);
        $pre1->Estado_pre=1;   
        $pre1->save();
        $pre2 = new Preguntaevaluacion;
        $pre2->Id_curso=$request->Id_curso;
        $pre2->Pregunta_pre =strtoupper($request->pre2);
        $pre2->Estado_pre=1;   
        $pre2->save();
        $pre3 = new Preguntaevaluacion;
        $pre3->Id_curso=$request->Id_curso;
        $pre3->Pregunta_pre =strtoupper($request->pre3);
        $pre3->Estado_pre=1;   
        $pre3->save();
        $pre4 = new Preguntaevaluacion;
        $pre4->Id_curso=$request->Id_curso;
        $pre4->Pregunta_pre =strtoupper($request->pre4);
        $pre4->Estado_pre=1;   
        $pre4->save();
        $pre5 = new Preguntaevaluacion;
        $pre5->Id_curso=$request->Id_curso;
        $pre5->Pregunta_pre =strtoupper($request->pre5);
        $pre5->Estado_pre=1;   
        $pre5->save();




        return redirect()->route('educador.index');
   
    }
    public function calificarevaluacion(Request $request )
    {

      
        $miultires=$request->Id_res;
        
        $re1=Respuestaevaluacion::findOrFail($miultires-4);
        $re1->Calificacion_res = $request->calif1;
        $re1->save();

        $re2=Respuestaevaluacion::findOrFail($miultires-3);
        $re2->Calificacion_res = $request->calif2;
        $re2->save();

        $re3=Respuestaevaluacion::findOrFail($miultires-2);
        $re3->Calificacion_res = $request->calif3;
        $re3->save();

        $re4=Respuestaevaluacion::findOrFail($miultires-1);
        $re4->Calificacion_res = $request->calif4;
        $re4->save();


        $re5=Respuestaevaluacion::findOrFail($miultires);
        $re5->Calificacion_res = $request->calif5;
        $re5->save();

        $idcon=$request->Id_con;
        
        Conncurso::where('Id_con', $idcon)
        ->update(['Certificado_con' => 'CREADO']);

        return redirect()->route('educador.calificaruncurso');
   
    }
    public function nuevocon(Request $request )
    {

      
        
        $contenido = new Contenido;
        $contenido->Id_curso=$request->Id_curso;
        $contenido->Titulo_con =strtoupper($request->Titulo_con);
        $contenido->Descripcion_con=$request->Descripcion_con;   
         
        if($request->hasFile('avatar')){

            $contenido->Imagen_con=$request->file('avatar')->store('public');

           }
           if($request->hasFile('avatar2')){

            $contenido->Documento_con=$request->file('avatar2')->store('public');

           }
           if($request->hasFile('avatar3')){

            $contenido->Video_con=$request->file('avatar3')->store('public');

           }
        $contenido->save();
        return redirect()->route('educador.index');
   
    }
    public function nuevocur(Request $request )
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
       
        $curso = new Curso;
        $curso->Id_inst=$milogueoid;
        $curso->Nom_curso =strtoupper($request->Nom_curso);
        $curso->moa_curso=$request->moa_curso; 
        $curso->Duracion_curso=$request->Duracion_curso;   
        $curso->Contenido_curso=$request->Contenido_curso; 
        if($request->hasFile('avatar')){

            $curso->Imagen_curso=$request->file('avatar')->store('public');

           }
         
        $curso->save();
        return redirect()->route('educador.index');
   
    }
}