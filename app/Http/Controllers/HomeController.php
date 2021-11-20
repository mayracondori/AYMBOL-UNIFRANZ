<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Institucion;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(){
        //metodo inicial
        return view('login');
    }
    public function index(){
        //metodo inicial
        return view('index');
    }

    public function informacion(){
        //metodo inicial
        return view('informacion');
    }
    public function opcionesinfo(){
        //metodo inicial
        return view('opcionesinfo');
    }
    public function tiposmotos(){
        //metodo inicial
        return view('tiposmotos');
    }
    public function tiposautos(){
        //metodo inicial
        return view('tiposautos');
    }
    public function infodescripcion(){
        //metodo inicial
        return view('infodescripcion');
    }
    public function listainfo(){
        //metodo inicial
        return view('listainfo');
    }
    public function listainfomotos(){
        //metodo inicial
        return view('listainfomotos');
    }
    public function listainfoautos(){
        //metodo inicial
        return view('listainfoautos');
    }
    public function registro(){
        //metodo inicial
        return view('registro');
    }
    public function registroinst(){
        //metodo inicial
        return view('registroinst');
    }
    public function miregistro(Request $request )
    {


        $codigointroducido=$request->Correo_usu;
        $validacioncodigo = DB::table('usuario')->where(['Correo_usu'=>$codigointroducido])->get();


        if(count($validacioncodigo)>0){

            //echo "Este codigo de empleado ya tiene un cuenta creada, inicie sesion en esa cuenta";
           echo"<script>
           alert('EL CORREO YA SE ENCUENTRA REGISTRADO');
           </script>
          ";
          return redirect()->route('registro');



        }else{

        $usuario = new Usuario;
        $usuario->Nom_usu =strtoupper($request->Nom_usu);
        $usuario->App_usu=strtoupper($request->App_usu);
        $usuario->Apm_usu=strtoupper($request->Apm_usu);
        $usuario->Correo_usu=$request->Correo_usu;   
        $usuario->Cel_usu=$request->Cel_usu;
        $usuario->Pass_usu=$request->Pass_usu;
        $usuario->Id_tipousu="1";
        $usuario->save();
        return redirect()->route('login');
    }
    }
    
    public function miregistroinst(Request $request )
    {


        $codigointroducido=$request->Correo_inst;
        $validacioncodigo = DB::table('institucion')->where(['Correo_inst'=>$codigointroducido])->get();


        if(count($validacioncodigo)>0){

            //echo "Este codigo de empleado ya tiene un cuenta creada, inicie sesion en esa cuenta";
           echo"<script>
           alert('EL CORREO YA SE ENCUENTRA REGISTRADO');
           </script>
          ";
          return redirect()->route('registro');



        }else{

        $inst = new Institucion;
        $inst->Nom_inst =strtoupper($request->Nom_inst);
        $inst->Descrpcion_inst=$request->Descrpcion_inst;
        $inst->Dir_inst=$request->Dir_inst;
        $inst->Correo_inst=$request->Correo_inst;   
        $inst->Tel_inst=$request->Tel_inst;
        $inst->Pass_inst=$request->Pass_inst;
        $inst->Id_tipoinst=$request->Id_tipoinst;
        $inst->save();
        return redirect()->route('login');
    }
    }
public function loginme(Request $req )
{
   $dbhost	= "localhost";	   // localhost or IP
   $dbuser	= "root";		  // database username
   $dbpass	= "";		     // database password
   $dbname	= "aymbol1";    // database name
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   $Correo_usu = $req->input('Correo_usu');
   $Pass_usu =$req->input('Pass_usu');

   session_start();
    //contador de intentos
    if(!isset($_SESSION['contador']))
    {
        $_SESSION['contador'] = 0;
    }
    //validacion si la sesion ya fue iniciada

    $validacion789 = DB::table('usuario')->where(['Correo_usu'=>$Correo_usu,'Pass_usu'=>$Pass_usu])->get();
    $validacion78912 = DB::table('institucion')->where(['Correo_inst'=>$Correo_usu,'Pass_inst'=>$Pass_usu])->get();
    
    
    if(count($validacion789)>0 || count($validacion78912)>0 )
        {
            $_SESSION['contador'] = 0;
        $_SESSION['active'] = true;
        $validacion = DB::table('usuario')->where(['Correo_usu'=>$Correo_usu,'Pass_usu'=>$Pass_usu,'id_tipousu'=>'1'])->get();

            if(count($validacion)>0){

                session(['Correo_usu' => $Correo_usu]);
                $codigo = $req->session()->get('Correo_usu');
                return view('usuario.index');
                //  return redirect()->route('usuario.index');
                // print_r($req->input('Correo_usu'));
            }else{
                $validacion2 = DB::table('usuario')->where(['Correo_usu'=>$Correo_usu,'Pass_usu'=>$Pass_usu,'id_tipousu'=>'2'])->get();


                if(count($validacion2)>0){
         
                session(['Correo_usu' => $Correo_usu]);
                $codigo = $req->session()->get('Correo_usu');
                return view('admin.index');
                echo"<script>alert('BIENVENIDO');</script>";
                }else{

                    $validacion3 = DB::table('institucion')->where(['Correo_inst'=>$Correo_usu,'Pass_inst'=>$Pass_usu,'id_tipoinst'=>'1'])->get();
                    if(count($validacion3)>0){

                        session(['Correo_inst' => $Correo_usu]);
                        $codigo = $req->session()->get('Correo_inst');
                        echo"<script>alert('BIENVENIDO');</script>";
                         return view('vendedor.index');
                       
                        }else{

                            //echo "esta cuenta o contrasenia no es valida";
                            $validacion4= DB::table('institucion')->where(['Correo_inst'=>$Correo_usu,'Pass_inst'=>$Pass_usu,'id_tipoinst'=>'2'])->get();
                 
                 
                            if(count($validacion4)>0){
                                echo"<script>alert('BIENVENIDO');</script>";
                            session(['Correo_inst' => $Correo_usu]);
                            $codigo = $req->session()->get('Correo_inst');
                            return view('educador.index');
                            
                 
                            }
                    
                        }
                }
            }        
                    


        
        }else{
            $validacion4847 = DB::table('usuario')->where(['Correo_usu'=>$Correo_usu])->get();
            $validacion4849 = DB::table('institucion')->where(['Correo_inst'=>$Correo_usu])->get();
           
            if(count($validacion4847)>0 || count($validacion4849)>0){

                echo"<script>
                alert('ERROR DE CONTRASEÑA');
                </script>
                ";

                $_SESSION['contador']++;
                $contador=$_SESSION['contador'];echo"<script>
                alert('Usted realizo ".$contador." intentos');
                </script>
                ";

                if($contador == 3)
                {
                    echo"<script>
                    alert('Llego al limite de intentos');
                    </script> ";
                    session_destroy();

                    return view('login');

                }else{
                    return view('login');
                }

                }else{
                echo"<script>
                alert('EL USUARIO NO EXISTE');
                </script>
                ";

                $_SESSION['contador']++;
                $contador=$_SESSION['contador'];echo"<script>
                alert('Usted realizo ".$contador." intentos');
                </script>
                ";
                if($contador == 3)
                {
                    echo"<script>
                    alert('Llego al limite de intentos');
                    </script> ";
                    session_destroy();

                    return view('login');

                }else{
                    return view('login');
                }
            }
        }
    }
}