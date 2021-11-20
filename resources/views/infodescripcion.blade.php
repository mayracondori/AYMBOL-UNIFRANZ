@extends('plantilla.modelo')
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
                    DESCRIPCION DE LA INFORMACION
                    </h6>
                   </div>
                   <?php 
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   
                            $id=$_POST['Id_info'];
                            $codigo2 = "SELECT Id_tipoinfo,Titulo_info,Descripcion_info,Fuente_info,SUBSTRING(Imagen_info, 8)AS Imagen_info FROM informacion where Id_info=$id ";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {

                            
                            $titulo=$rest2 ['Titulo_info']; 
                            $fotito=$rest2 ['Imagen_info'];
                            $descripcion=$rest2['Descripcion_info'];
                            $fuente=$rest2 ['Fuente_info'];
                            $utd="http://localhost/aymbol/public/storage/".$fotito;
                            }
                                                                ?>
                <div class="text-white" style="background-color: rgba(0, 0, 0, .5);">
                <div style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/466/57/320/blue-dark-night-landscape-wallpaper-preview.jpg)"class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold text-white">
                                                <?php echo $titulo?>
                                                </h3>
                                               
                                            </div>
                                                
                                                  
                                        
                                                <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
                                                <?php echo $descripcion?>
                                     
                                        <div style="margin-left:200px">
                                                <img  style=" width:250px" src="<?php echo $utd;?>">
                                                    
                                        </div>
                            <div style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/466/57/320/blue-dark-night-landscape-wallpaper-preview.jpg)">
                                       <label style="margin-left:25px"class="my-4 text-white text-lg leading-relaxed">
                                                <?php echo "Fuente de la informacion: ".$fuente?>
                                            </label>
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