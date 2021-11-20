@extends('plantilla.modelousuario')
@section('title.USUARIO')
@section('content')

<div  class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
         <div class="w-full ">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 style="color:#FCFDFF" class="text-blueGray-500 text-sm font-bold">
                    DESCRIPCION DEL CURSO
                    </h6>
                   </div>
                   <?php 
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   
                            $id=$_POST['Id_curso'];
                            $codigo2 = "SELECT c.Id_curso, c.Nom_curso,c.Duracion_curso,c.Contenido_curso,i.Nom_inst,c.moa_curso,SUBSTRING(c.Imagen_curso, 8) as Imagen_curso FROM cursos as c, institucion as i WHERE c.Id_curso=$id and c.Id_inst=i.Id_inst";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {
                            
                            $idcur=$rest2 ['Id_curso'];
                            $fotito=$rest2 ['Imagen_curso'];							               
                             $nombre=  $rest2 ['Nom_curso']; 
                             $duracion=  $rest2 ['Duracion_curso'];  
                             $contenido=  $rest2 ['Contenido_curso'];   
                             $inst=  $rest2 ['Nom_inst'];
                             $moa=  $rest2 ['moa_curso'];                 
                            $utd="http://localhost/aymbol/public/storage/".$fotito;}
                                                                ?>
                <div class="text-white" style="background-color: rgba(0, 0, 0, .5);">
                <div style="background-image:url(https://i.pinimg.com/originals/b8/34/ce/b834cedfcabf270c1288a21065374f20.jpg)"class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                  
                <form enctype="multipart/form-data" method="POST" action="{{route('inscribirte')}} " autocomplete="off" >
                @csrf
                                                <h3 class="text-3xl font-semibold text-white">
                                                <?php echo "CURSO ". $nombre;?>
                                                </h3>
                                               
                                            </div>
                                                
                                            <div style="margin-left:20px">
                                          <p>
                                          <label for=""><?php echo "CURSO DIRIGIDO A CONDUCTORES DE : ".$moa;?> </label>
                                          <br>
                                          <label for=""><?php echo "Duración del curso : ".$duracion;?> </label>
                                          <br>
                                          <label for=""><?php echo $contenido;?> </label>
                                          <br><label for=""><?php echo " Curso brindado por :".$inst;?> </label>
                                          </p> 
                                          </div>
                                        <div style="margin-left:200px">
                                                <img  style=" width:250px" src="<?php echo $utd;?>">
                                                    
                                        </div>      
                                        <input type="hidden" name="Id_curso" value="<?php echo $idcur ?>">
						      
                                        <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        INSCRIBIRME AL CURSO
                      </button>                    
                    </form>                 
                            <div style="background-image:url(https://www.mujeresmoteras.com/wp-content/uploads/2019/11/caracteri%CC%81sticas-de-una-motocicleta.jpg)">
                                          </div>  
    
    
    </div>
</div></div></div></div>
</div>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable( {
                responsive: true
            } )
            .columns.adjust()
            .responsive.recalc();
    } );

</script>
@endsection