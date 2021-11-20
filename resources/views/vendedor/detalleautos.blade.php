@extends('plantilla.modelovendedor')
@section('title.VENDEDOR')
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
                    DESCRIPCION DEL AUTO
                    </h6>
                   </div>
                   <?php 
                   $coneccion = mysqli_connect ("localhost", "root", "" );
                   $basededatos = 'aymbol1';
                   $bd =mysqli_select_db ($coneccion, $basededatos);
                   
                            $id=$_POST['Id_auto'];
                            $codigo2 = "SELECT tt.Nom_tipotrans,a.Motor_auto,a.Id_auto,ta.Nom_tipoauto,i.Nom_inst,c.Nom_ciudad,co.Nom_combustible,a.Marca_auto,a.Modelo_auto,a.Color_auto,a.ModAnio_auto,t.Nom_traccion,
                            a.Numpuertas_auto,a.Numasientos_auto,a.Documento_auto,a.Precio,a.Garantia_auto,SUBSTRING(a.Foto_auto, 8) as Foto_auto,a.Stock_auto,a.Updated_at 
                            FROM tipoauto as ta,institucion as i,ciudad as c,combustible as co,tipotransmision as tt, traccion as t,automotores as a 
                            WHERE a.Id_auto=$id and a.Id_tipoauto=ta.Id_tipoauto and a.Id_inst=i.Id_inst and a.Id_ciudad=c.Id_ciudad and a.Id_combustible=co.Id_combustible 
                            and a.Id_tipotrans=tt.Id_tipotrans and a.Id_traccion= t.Id_traccion";
                            $resultado2 = mysqli_query($coneccion, $codigo2);
                          while ($rest2 = mysqli_fetch_array($resultado2)) {
                            $idm=$rest2['Modelo_auto'];  
                            $tipoauto=$rest2 ['Nom_tipoauto']; 
                            $fotito=$rest2 ['Foto_auto'];
							               $marca=  $rest2 ['Marca_auto'];                   
					                   $modelo=  $rest2 ['Modelo_auto'];   
                             $modeloanio=  $rest2 ['ModAnio_auto'];  
                             $motor=  $rest2 ['Motor_auto'];                     
					                   $color=$rest2 ['Color_auto'];  
                             $tipotras=  $rest2 ['Nom_tipotrans']; 
                             $traccion=  $rest2 ['Nom_traccion'];  
                             $puertas=  $rest2 ['Numpuertas_auto'];   
                             $asientos=  $rest2 ['Numasientos_auto'];
                             $doc=  $rest2 ['Documento_auto'];                 
                           $precio =$rest2 ['Precio'];  
                           $garantia =$rest2 ['Garantia_auto'];                   
                           $inst= $rest2 ['Nom_inst'];                     
                           $ciudad= $rest2 ['Nom_ciudad'];   
                           $combuestible= $rest2 ['Nom_combustible'];                    
                            $utd="http://localhost/aymbol/public/storage/".$fotito;}
                                                                ?>
                <div class="text-white" style="background-color: rgba(0, 0, 0, .5);">
                <div style="background-image:url(https://img1.wallspic.com/previews/3/2/6/5/3/135623/135623-noche_estrellada_negra_y_azul-x750.jpg)"class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold text-white">
                                                AUTO EN VENTA
                                                </h3>
                                               
                                            </div>
                                                
                                            <div style="margin-left:20px">
                                          <p>
                                          <label for=""><?php echo "TIPO DE AUTO : ".$tipoauto;?> </label>
                                          <br>
                                          <label for=""><?php echo "CONSECIONARIA: ".$inst;?> </label>
                                          <br>
                                          <label for=""><?php echo "CIUDAD:".$ciudad;?> </label>
                                          <br><label for=""><?php echo "COMBUSTIBLE :".$combuestible;?> </label>
                                          <br><label for=""><?php echo "MARCA DE AUTO :".$marca;?> </label>
                                          <br><label for=""><?php echo "MODELO DE AUTO :".$modelo;?> </label>
                                          <br><label for=""><?php echo "COLOR:".$color;?> </label>
                                          <br>  <label for=""><?php echo "AÑO DEL MODELO:".$modeloanio;?> </label>
                                          <br><label for=""><?php echo "MOTOR :".$motor." cc";?> </label>
                                          <br><label for=""><?php echo "TIPO DE TRANSMISION:".$tipotras;?> </label>
                                          <br><label for=""><?php echo "NUMERO DE PUERTAS :".$puertas;?> </label>
                                          <br><label for=""><?php echo "NUMERO DE ASIENTOS :".$asientos;?> </label>
                                          <br><label for=""><?php echo "INCLUYE :".$doc;?> </label>
                                          <br> <label for=""><?php echo "GARANTIA :".$garantia;?> </label>
                                          </p> 
                                          </div>
                                        <div style="margin-left:200px">
                                                <img  style=" width:250px" src="<?php echo $utd;?>">
                                                    
                                        </div>            
                                        
                                        
                            <div style="background-image:url(https://img1.wallspic.com/previews/3/2/6/5/3/135623/135623-noche_estrellada_negra_y_azul-x750.jpg)">
                            <label class="text-white"for=""><?php echo "PRECIO :".$precio." $";?> </label>
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