@extends('plantilla.modeloeducador')
@section('title.EDUCADOR')
@section('content')

<div class=" text-white p-0 ">
  <div  style="margin-left:50px" class=" border-0 shadow-lg ">
  <BR><BR></BR></BR>
    <H1>EVALUACION PARA REVISAR </H1>
    <form  method="POST" action="{{route('educador.calificarevaluacion')}} " autocomplete="off" >
    @csrf
    
      <div class="relative z-0 w-full mb-5">
      <?php 
      $milogueo=session('Correo_usu');
      $idcur=$_POST['Id_curso'];
    
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   $con=1;
                            $codigo2 = "SELECT con.Id_con,r.id,r.Respuesta_res, p.Pregunta_pre, r.Calificacion_res, con.Updated_at, con.Certificado_con
                            FROM conncursos as con, preguntasevaluacion as p,respuestasevaluacion as r, usuario as u
                            WHERE con.Id_curso=4 and u.Correo_usu='mayracr@gmail.com' and u.Id_usu=con.Id_usu and con.Id_curso=p.Id_curso and p.Id_pre=r.Id_pre";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {
$ultiidres=$rest2['id'];
$idcon=4;                       
      ?>
      <br><strong>
      <label  class="absolute duration-300 -z-1 origin-0 "><?php echo $rest2['Pregunta_pre']?></label>
      </strong> <BR></BR>  
        <label  style="margin-left:30px" class="absolute duration-300 -z-1  "><?php echo $rest2['Respuesta_res']?></label>
      <BR></BR>
      <label> Calificacion sobre 20 puntos: </label><input style="color:red" type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                         id="<?php echo "calif".$con?>" name="<?php echo "calif".$con?>" required
                      />
        
        <br>
        <?php
                       $con=$con+1;   }
        ?>
        <input type="hidden" name="Id_con" value="4">
        <input type="hidden"  id="Id_res" name="Id_res"  value="6" required
                      />
     <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        ENVIAR CALIFICACIÓN
                      </button>
    </form>
  </div>
</div>
@endsection