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
                    DESCRIPCION DE LA INSTITUCION
                                        </h6>
                   </div>
                   <?php 
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   
                            $id=$_POST['Id_inst'];
                            $codigo2 = "SELECT * FROM institucion  WHERE Id_inst=$id";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {
                          
                            $nombre=$rest2 ['Nom_inst']; 
                            $des=  $rest2 ['Descrpcion_inst'];                   
					        $dir=  $rest2 ['Dir_inst'];   
                             $tel=  $rest2 ['Tel_inst'];  
                             $correo=  $rest2 ['Correo_inst'];   }                  
					                                             ?>
                <div class="text-white" style="background-color: rgba(0, 0, 0, .5);">
                <div style="background-image:url(https://mobimg.b-cdn.net/pic/v2/gallery/real/dorogi-noch-pejzazh-planety-20530.jpg)"class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-bold text-white">
                                                <?php echo $nombre;?> 
                                                </h3>
                                               
                                            </div>
                                                
                                            <div style="margin-left:20px">
                                            <BR></BR>
                                          <p><?php echo $des;?>
                                          </p>
                                          <BR></BR>
                                          <h2><?php echo "DIRECCIÓN : ".$dir;?> </h2>
                                          <br>
                                          <h2><?php echo "TELÉFONO: ".$tel;?> </h2>
                                            <br>
                                          <h2><?php echo "CORREO:".$correo;?>  </h2>
                                          
                                          <br>
                                          
                                          </div>
                                       
    <div id="whatsapp-icon" style="position:fixed; left:500px; bottom:10px; text-align:center; padding:10px">
        <a href=<?php echo"https://api.whatsapp.com/send?phone=591".$tel."&text=Hola%20".$nombre."%20deseo%20mas%20informacion%20de%20tus%20servicios."?>>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png" width="50" height="50"><p class="text-black">Contacto</p></a>
    </div>
                                        
                            <div style="background-image:url(https://mobimg.b-cdn.net/pic/v2/gallery/real/dorogi-noch-pejzazh-planety-20530.jpg)">
                            <label class="text-white"for=""> Crea conexiones y rompe las barreras...</label> </label>
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