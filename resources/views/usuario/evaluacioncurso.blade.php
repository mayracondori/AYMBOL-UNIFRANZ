@extends('plantilla.modelousuario')
@section('title.USUARIO')
@section('content')
<style>
        .-z-1 {
            z-index: -1;
        }

        .origin-0 {
            transform-origin: 0%;
        }

        input:focus ~ label,
        input:not(:placeholder-shown) ~ label,
        textarea:focus ~ label,
        textarea:not(:placeholder-shown) ~ label,
        select:focus ~ label,
        select:not([value='']):valid ~ label {
            /* @apply transform; scale-75; -translate-y-6; */
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
            skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-scale-x: 0.75;
            --tw-scale-y: 0.75;
            --tw-translate-y: -1.5rem;
        }

        input:focus ~ label,
        select:focus ~ label {
            /* @apply text-black; left-0; */
            --tw-text-opacity: 1;
            color: rgba(0, 0, 0, var(--tw-text-opacity));
            left: 0px;
        }
</style>

<div class=" text-white p-0 sm:p-12">
  <div class="mx-auto max-w-md px-6 py-12 border-0 shadow-lg sm:rounded-3xl">
    <h1 class="text-2xl font-bold mb-8">Evaluacion para la certificacion del curso</h1>
    <p>RECUERDA QUE SOLO PUEDES REALIZAR LA EVALUACIÓN UNA VEZ</p>
    <form  method="POST" action="{{route('usuario.enviarevaluacion')}} " autocomplete="off" >
    @csrf
    
      <div class="relative z-0 w-full ">
      <?php 
      $idcur=$_GET['curso'];
    
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   $con=1;
                            $codigo2 = "SELECT * FROM preguntasevaluacion where Estado_pre=1 and Id_curso=$idcur";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {
                            $idcone=$rest2['Id_pre'];
                            
                           
      ?>
      <br>
      <strong>
      <label  class="  "><?php echo $rest2['Pregunta_pre']?></label>
      </strong>  <br>
        <input width="500px" type="text" name="<?php echo "resp".$con?>" id="<?php echo "resp".$con ?>"  required  class="  bg-transparent border-0  focus:outline-none  focus:border-white border-gray-200"
        />
        <br>
        <?php
        $con=$con+1;
                          }
        ?>
      
      <input type="hidden" name="Id_cur" id="Id_cur" value="<?php echo $idcur ?>"     />
      <input type="hidden" name="Id_pre" id="Id_pre" value="<?php echo $idcone ?>"     />
      <input
        
        type="submit" value="ENVIAR EVALUACION"
        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-500 hover:bg-blue43EDSXZ-600 hover:shadow-lg focus:outline-none"
      >
        
      </input>
    </form>
  </div>
</div>
@endsection