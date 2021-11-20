@extends('plantilla.modelousuario')
@section('title.VENDEDOR')
@section('content')


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
                   $utd="http://localhost/aymbol/public/storage/".$fotito;
                }
                $codigo3 = "SELECT Id_con,Titulo_con,Descripcion_con,SUBSTRING(Imagen_con, 8) as Imagen_con,SUBSTRING(Video_con, 8) as Video_con,SUBSTRING(Documento_con, 8) as Documento_con FROM contenido WHERE Id_curso=$id";
                $resultado3 = mysqli_query($coneccion, $codigo3);
              
                                                                ?>


<div  class="container mx-auto  text-white px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
         <div class="w-full ">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 style="color:#FCFDFF" class="text-blueGray-500 text-sm font-bold">
                   CURSO <?php echo $nombre;?>
                    </h6>
                  </div>
                </div>
                <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img alt="..." class="max-w-full rounded-lg shadow-lg" src="<?php echo $utd?>">
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div class=" p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full ">
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold"><?php echo $nombre;?></h3>
                <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                <?php echo $contenido;?>
                </p>
               
              </div>
              <ul class="list-none mt-6">
                 
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full  mr-3"><i class="fab fa-html5"></i></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500"><?php echo "Instituto: ".$inst?></h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full mr-3"><i class="far fa-paper-plane"></i></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500"><?php echo "Duracion: ".$duracion?></h4>
                      </div>
                    </div>
                  </li>
                </ul>
            </div>
          </div>

          <div class="flex flex-wrap">
          <?php 
     while ($rest4 = mysqli_fetch_array($resultado3)) {
       $idcon = $rest4['Id_con'];
      $titulo=  $rest4 ['Titulo_con']; 
      $idcon = $rest4['Id_con'];
      $descrip=  $rest4 ['Descripcion_con'];  
      $fotito=$rest4 ['Imagen_con'];							               
     $video=  $rest4 ['Video_con'];  
     $docu= $rest4['Documento_con'];
                    
      $utdim="http://localhost/aymbol/public/storage/".$fotito;
      $utdvi="../storage/".$video;
      $utddoc="http://localhost/aymbol/public/storage/".$docu;
     ?>
  <div class="w-full text-center">
    <button class="bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="<?php echo "openPopover(event,'bottom','popover".$idcon."')"?>">
      <?php echo $titulo?>
    </button>
    <div  style="background-color:#000000;" class="hidden bg-lightBlue-600 border-0  block  no-underline break-words " id=<?php echo "popover".$idcon?>>
      <div>
        <div class="bg-emerald-600 text-white opacity-75 font-semibold border-b border-solid border-blueGray-100 uppercase ">
       
        <?php echo $titulo?>
        </div>
        
        <div class="text-white ">
        <?php echo $descrip?>
        
        </div>
        <center>
        <?php
        if($fotito==""){
        }else{          
        ?>
        <img src="<?php echo $utdim?>">
        <?php
        }
        if($docu==""){
        }else{ 
        ?>
        <embed src="<?php echo $utddoc?>" type="application/pdf" width="800px" height="700px" />
        <BR>
        <BR>
        <?php
      }

      ?>
        
        </center>
        <?php
        if($video==""){
        }else{ 
        ?>
        <center>
        <video width="560" height="315" controls muted>
  <source src="<?php echo $utdvi?>" type="video/mp4">
</video>

        </center>
        <?php 
        }
        ?>
      </div>
    </div>
  </div>

<?php
}
?>


</div>
<?php

$codigo25 = "SELECT Count(r.Respuesta_res) as conteo FROM preguntasevaluacion as p, respuestasevaluacion as r where p.Id_curso=$idcur and p.Id_pre=r.Id_pre and r.Respuesta_res!=''";
$resultado25 = mysqli_query($coneccion, $codigo25);
while ($rest25 = mysqli_fetch_array($resultado25)) {
$mires=$rest25['conteo'];
}
if($mires==0){
  
?>
<form  method="get" action="{{route('usuario.evaluacioncurso')}} " autocomplete="off" >
    @csrf
    
        <input type="hidden" name="curso" id="curso" value="<?php echo $idcur?>"  
        />
        <input
        
        type="submit" value="EVALUACION"
        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-500 hover:bg-blue-600 hover:shadow-lg focus:outline-none"
      >
      </input>
    </form>
<?php

}
    ?>
<script src="https://unpkg.com/@popperjs/core@2" charset="utf-8"></script>
<script>
  function openPopover(event,placement,popoverID){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(popoverID), {
      placement: placement
    });
    document.getElementById(popoverID).classList.toggle("hidden");
  }
</script>





               </div>
            </div>
        </div>
</div>

                                                                
@endsection