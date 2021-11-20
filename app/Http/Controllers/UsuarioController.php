<?php

namespace App\Http\Controllers;
use App\Models\Conncurso;
use App\Models\Calificacion;
use App\Models\Respuestaevaluacion;
use Illuminate\Http\Request;

use DateTime;
use DatePeriod;
use DateInterval;
use PDF;
use QrCode;
class UsuarioController extends Controller
{

    public function index(){
        //metodo inicial
        return view('usuario.index');
    }
    public function ventas(){
        //metodo inicial
        return view('usuario.ventas');
    }
    public function ventasmotos(){
        //metodo inicial
        return view('usuario.ventasmotos');
    }
    public function autoescuelas(){
        //metodo inicial
        return view('usuario.autoescuelas');
    }
    public function vendedores(){
        //metodo inicial
        return view('usuario.vendedores');
    }
    public function listaautos(){
        //metodo inicial
        return view('usuario.listaautos');
    }
    public function listamotos(){
        //metodo inicial
        return view('usuario.listamotos');
    }
    public function listacursos(){
        //metodo inicial
        return view('usuario.listacursos');
    }
    public function miscursos(){
        //metodo inicial
        return view('usuario.miscursos');
    }
    public function detalleinst(){
        //metodo inicial
        return view('usuario.detalleinst');
    }
     
    public function detallemotos(){
        //metodo inicial
        return view('usuario.detallemotos');
    }
    public function calificaruncurso(){
        //metodo inicial
        return view('usuario.calificaruncurso');
    }
     
     
    public function detalleautos(){
        //metodo inicial
        return view('usuario.detalleautos');
    }
    public function detallecurso(){
        //metodo inicial
        return view('usuario.detallecurso');
    }
    public function pasarcurso(){
        //metodo inicial
        return view('usuario.pasarcurso');
    }
    public function inscribirte(Request $request )
    {
         $milogueo= session('Correo_usu');    
                
                            
                $coneccion = mysqli_connect ("localhost", "root", "" );
                $basededatos = 'aymbol1';
                $bd =mysqli_select_db ($coneccion, $basededatos);
                $c123 = "SELECT * FROM usuario where Correo_usu='$milogueo'";
                $r1 = mysqli_query($coneccion, $c123);
                
                while ($re = mysqli_fetch_array($r1)) {
                  $milogueoid=$re ['Id_usu']; 
                  
                }
        $estudiante = new Conncurso;
        $estudiante->Id_usu=$milogueoid;
        $estudiante->Id_curso=$request->Id_curso;   
       
        $estudiante->save();
        return redirect()->route('usuario.miscursos');
   
    }
    
    public function calicur(Request $request )
    {  
             
        $cur = new Calificacion;
        $cur->Ense_cal=$request->ense;
        $cur->Conte_cal=$request->conte;
        $cur->Multi_cal=$request->multi;
        $cur->Id_curso=$request->Id_curso;   
       
        $cur->save();
        return redirect()->route('usuario.miscursos');
   
    }
    public function evaluacioncurso(){
        //metodo inicial
        return view('usuario.evaluacioncurso');
    }
    public function enviarevaluacion(Request $request )
    {
        $milogueo= session('Correo_usu');    
                
                            
        $coneccion = mysqli_connect ("localhost", "root", "" );
        $basededatos = 'aymbol1';
        $bd =mysqli_select_db ($coneccion, $basededatos);
        $c123 = "SELECT * FROM usuario where Correo_usu='$milogueo'";
        $r1 = mysqli_query($coneccion, $c123);
        
        while ($re = mysqli_fetch_array($r1)) {
          $milogueoid=$re ['Id_usu']; 
        }
        
       $miidrefin=$request->Id_pre; 
       $idcur=$request->Id_cur; 
      
        $resp = new Respuestaevaluacion;
        $resp->Id_usu=$milogueoid;
        $resp->Id_pre=$miidrefin-4;
        $resp->Respuesta_res=$request->resp1;   
       
        $resp->save();
        $resp2 = new Respuestaevaluacion;
        $resp2->Id_usu=$milogueoid;
        $resp2->Id_pre=$miidrefin-3;
        $resp2->Respuesta_res=$request->resp2;   
       
        $resp2->save();
        $resp3 = new Respuestaevaluacion;
        $resp3->Id_usu=$milogueoid;
        $resp3->Id_pre=$miidrefin-2;
        $resp3->Respuesta_res=$request->resp3;   
       
        $resp3->save();
        $resp4 = new Respuestaevaluacion;
        $resp4->Id_usu=$milogueoid;
        $resp4->Id_pre=$miidrefin-1;
        $resp4->Respuesta_res=$request->resp4;   
       
        $resp4->save();
        $resp5 = new Respuestaevaluacion;
        $resp5->Id_usu=$milogueoid;
        $resp5->Id_pre=$miidrefin;
        $resp5->Respuesta_res=$request->resp5;   
       
        $resp5->save();
        
        session(['calicur' => $idcur]);
        return redirect()->route('usuario.calificaruncurso');
    }
    
public function pdfcertificado(Request $request)
{

    $mt=$request->Id_con;
    $idconn=$request->Id_con;
  session(['pdfcerti' => $mt]);
 
    $coneccion = mysqli_connect ("localhost", "root", "" );
    $basededatos = 'aymbol1';
      $bd =mysqli_select_db ($coneccion, $basededatos);
      $anti=0;
      $consultita=" SELECT c.Id_con, u.Nom_usu ,u.App_usu,u.Apm_usu, cur.Id_curso,cur.Nom_curso,c.Documento_con,c.Fechainicio_con,c.Fechafin_con,c.Certificado_con,c.Calificacion_con,c.Created_at,c.Updated_at, i.Nom_inst FROM conncursos as c,usuario as u, cursos as cur , institucion as i WHERE c.Id_con=$idconn and c.Id_usu=u.Id_usu  and c.Id_curso=cur.Id_curso and cur.Id_inst=i.Id_inst";
      $resultado2=mysqli_query($coneccion,$consultita);

      while($rest2=mysqli_fetch_array($resultado2)){

        $solicitante=$rest2['Nom_usu'].$rest2['App_usu'];
        $cur=$rest2['Id_curso'];
        $calificacion=$rest2['Calificacion_con'];
        $inst=$rest2['Nom_inst'];
    }
    
            $hoy = date("d/m/Y-H:i:s"); 

        $contenido ="AYMBOL".$idconn."-".$solicitante."-".$cur."-".$calificacion."-".$hoy."-".$inst;
        $nom="../public/qrcodes/qrcode".$idconn.".png";
        QrCode::format('png')->size(100)->generate($contenido,$nom);
        return redirect()->route('usuario.pdfmicertificad');

        }
public function micertificadoT()
{
    $data = [
        'titulo' => 'AYMBOLCERTIFICADO'
    ];


    $pdf = \PDF::loadView('usuario.plantillacertificadopdf2', $data);

    return $pdf->download('AYMBOLMICERTIFICADO.pdf');
}

public function pdfmicertificad(){
    // metodo mostrar un elemento
    return view('usuario.pdfmicertificad');

}
public function miscertificados(){
    // metodo mostrar un elemento
    return view('usuario.miscertificados');

}

public function plantillacertificadopdf2(){
    // metodo mostrar algo especifico
    return view('usuario.plantillacertificadopdf2');


}
}