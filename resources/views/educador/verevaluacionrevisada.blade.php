@extends('plantilla.modeloeducador')
@section('title.EDUCADOR')
@section('content')

<div class=" text-white p-0 ">
  <div  style="margin-left:50px" class=" border-0 shadow-lg ">
  <BR><BR></BR></BR>
    <H1>EVALUACION REVISADA</H1>
    <form  method="POST" action="{{route('usuario.enviarevaluacion')}} " autocomplete="off" >
    @csrf
    
      <div class="relative z-0 w-full mb-5">
      <?php 
      $milogueo=session('Correo_usu');
      $idcur=$_POST['Id_cur'];
    
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   
                            $codigo2 = "SELECT r.Respuesta_res, p.Pregunta_pre, r.Calificacion_res, con.Updated_at, con.Certificado_con
                            FROM conncursos as con, preguntasevaluacion as p,respuestasevaluacion as r, usuario as u
                            WHERE con.Id_curso=$idcur and u.Correo_usu='$milogueo' and u.Id_usu=con.Id_usu and con.Id_curso=p.Id_curso and p.Id_pre=r.Id_pre";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {

                           
      ?>
      <br><strong>
      <label  class="absolute duration-300 -z-1 origin-0 "><?php echo $rest2['Pregunta_pre']?></label>
      </strong> <BR></BR>  
        <label  style="margin-left:30px" class="absolute duration-300 -z-1  "><?php echo $rest2['Respuesta_res']?></label>
      <BR></BR>
        
        <label style="margin-left:200 px; color:red" class="absolute duration-300 -z-1 "><?php echo "Calificación sobre 20 puntos :".$rest2['Calificacion_res']." puntos"?></label>
      
        <br>
        <?php
                          }
        ?>
     
    </form>
  </div>
</div>
@endsection