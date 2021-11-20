@extends('plantilla.modelo')
@section('title.INFORMACION')
@section('content')
<?php

$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'aymbol1';
$bd =mysqli_select_db ($coneccion, $basededatos);


?>
<div class="container mx-auto h-full">
          <div class="flex content-center items-center justify-center h-full">
          
        <center>
<div class="relative flex flex-col  break-words w-full justify-center " >
              
                                      <strong> <h1 style="color:white">INFOMACIÓN SOBRE LA DOCUMENTACIÓN</h1> 
                                      <br>
                                       <button style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/466/57/320/blue-dark-night-landscape-wallpaper-preview.jpg)"  class="bg-teal-600 text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded  outline-none focus:outline-none  mr-1 mb-1  transition-all " type="button" >
                                       <a
                  href="http://localhost/aymbol/public/listainfo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >
                LISTA DE INFORMACIÓN
                </a> 
                      </button></strong>
<BR></BR>
                                      <div class="row">
                                          <?php
                            $codigo = "SELECT Id_info, Titulo_info FROM informacion where Id_tipoinfo=1";
                              
                            $resultado = mysqli_query($coneccion, $codigo);

                            while ($rest = mysqli_fetch_array($resultado)) {
                              $titulo1=$rest ['Titulo_info'];
                            ?>  

                     
                    <button class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded  outline-none focus:outline-none  mr-1 mb-1  transition-all " type="button" onclick="toggleModal('<?php echo $titulo1?>')">
                      <?php echo $titulo1 ?>
                      </button>
                     
                      <?php 
                   }
                            $id=$rest ['Id_info'];
                            $codigo2 = "SELECT Titulo_info,Descripcion_info,Fuente_info,SUBSTRING(Imagen_info, 8)AS Imagen_info FROM informacion where Id_tipoinfo=1 ";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {
                            $titulo=$rest2 ['Titulo_info']; 
                            $fotito=$rest2 ['Imagen_info'];
                            $descripcion=$rest2['Descripcion_info'];
                            $fuente=$rest2 ['Fuente_info'];
                            $utd="http://localhost/aymbol/public/storage/".$fotito;
                                                                ?>
                      </div>
               </center>      
            <div  class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="<?php echo $titulo?>">
                        <div  class="relative w-auto my-6 mx-auto max-w-3xl">
                            <!--content-->
                            
                                <div  style="justify-content:center" class=" bg-blueGray-200 border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                 <!--header-->
                                 
                                            <div style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/466/57/320/blue-dark-night-landscape-wallpaper-preview.jpg)"class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold text-white">
                                                <?php echo $titulo?>
                                                </h3>
                                                <button class="p-1 ml-auto bg-transparent border-0 text-white opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('<?php echo $titulo?>')">
                                              <span class="bg-transparent text-white opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                X
                                              </span>
                                              </button>
                                            </div>
                                                
                                                  
                                        <div  style=" width:750px; height:230px;  overflow: scroll" class="relative p-6 flex-auto">
                                                <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
                                                <?php echo $descripcion?>
                                        </div>
                                        <div style="margin-left:200px">
                                                <img  style=" width:250px" src="<?php echo $utd;?>">
                                                    
                                        </div>
                            <div style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/466/57/320/blue-dark-night-landscape-wallpaper-preview.jpg)">
                                       <label style="margin-left:25px"class="my-4 text-white text-lg leading-relaxed">
                                                <?php echo "Fuente de la informacion: ".$fuente?>
                                            </label>
                                            </div>  

                                </div>
                                
                        </div>
                        
            </div>

             <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="<?php echo $titulo."1"; ?>"></div>
             </div>

      <?php
      }
      ?>           
             
</div>
 

           
    
          </div>
      
        </div>
      
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "1").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "1").classList.toggle("flex");
  }
</script>
</html>

@endsection