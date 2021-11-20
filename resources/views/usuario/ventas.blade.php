@extends('plantilla.modelousuario')
@section('title.USUARIO')
@section('content')

<div class="container mx-auto h-full">
          <div class="  justify-center h-full">
          <center>
<div class="  flex-col  break-words justify-center " >
              
                                      <strong> <h1 style="color:white">AUTOS EN VENTA</h1> 
                                      <br>
                                       <button class="bg-teal-600 text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded  outline-none focus:outline-none  mr-1 mb-1  transition-all " type="button" >
                                       <a
                  href="http://localhost/aymbol/public/usuario/listaautos"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >
                LISTA DE AUTOS EN VENTA
                </a> 
                      </button></strong>
<BR></BR>
</center>
                                      <div class="row">
                                            
                                      <?php
                                      $coneccion = mysqli_connect ("localhost", "root", "" );
                                      $basededatos = 'aymbol1';
                                      $bd =mysqli_select_db ($coneccion, $basededatos);
                                                                       
                            $codigo = "SELECT a.Id_auto,ta.Nom_tipoauto,i.Nom_inst,c.Nom_ciudad,co.Nom_combustible,a.Marca_auto,a.Modelo_auto,a.Color_auto,a.ModAnio_auto,t.Nom_traccion,
                            a.Numpuertas_auto,a.Numasientos_auto,a.Documento_auto,a.Precio,a.Garantia_auto,SUBSTRING(a.Foto_auto, 8) as Foto_auto,a.Stock_auto,a.Updated_at 
                            FROM tipoauto as ta,institucion as i,ciudad as c,combustible as co,tipotransmision as tt, traccion as t,automotores as a 
                            WHERE a.Id_tipoauto=ta.Id_tipoauto and a.Id_inst=i.Id_inst and a.Id_ciudad=c.Id_ciudad and a.Id_combustible=co.Id_combustible 
                            and a.Id_tipotrans=tt.Id_tipotrans and a.Id_traccion= t.Id_traccion";
                              
                            $resultado = mysqli_query($coneccion, $codigo);

                            while ($rest = mysqli_fetch_array($resultado)) {
                              $ids=$rest ['Modelo_auto'];
                              $fotito1=$rest ['Foto_auto'];
                              $utd1="http://localhost/aymbol/public/storage/".$fotito1;
                            ?>  
                            

                                             
                                              <div style="background-image:url(https://media.istockphoto.com/photos/black-blue-abstract-city-buildings-skyline-water-reflection-picture-id506136308?k=6&m=506136308&s=612x612&w=0&h=QrTxdh32Vdc2IGqP1KxUUKuUqHZkwIdY-hxkVT38ss8=)"class=" col-sm-4  text-white max-w-xs text-sm px-6 py-3 mr-1 mb-1 outline-none focus:outline-none transition-all rounded " onclick="toggleModal('<?php echo $ids;?>')">
                                              
                                              <img class="w-full" src="<?php echo $utd1;?>" >
                                                <div class="px-6 py-4">
                                                    <div class="font-bold text-xl mb-2"><?php echo $rest ['Marca_auto']." - ".$rest ['Modelo_auto']; ?></div>
                                                    <p class="text-grey-darker text-base">
                                                    Tipo de auto:<?php echo $rest ['Nom_tipoauto']; ?>
                                                    <br>
                                                    Ciudad:<?php echo $rest ['Nom_ciudad']; ?>
                                                    <br>
                                                    Consecionaria: <?php echo $rest ['Nom_inst']; ?>
                                        
                                                    </p>
                                                </div>
                                                <div class="px-6 py-4">
                                                    <span class="inline-block bg-grey-lighter  px-3 py-1 text-sm font-semibold text-grey-darker mr-2"> <?php echo "Precio: ".$rest ['Precio']; ?></span>
                                                </div>
                                              </div>
                                            <?php         
                                        }?>
                                       </div>
                                        <?php
                                        
                            $codigo2 = "SELECT tt.Nom_tipotrans,a.Motor_auto,a.Id_auto,ta.Nom_tipoauto,i.Nom_inst,c.Nom_ciudad,co.Nom_combustible,a.Marca_auto,a.Modelo_auto,a.Color_auto,a.ModAnio_auto,t.Nom_traccion,
                            a.Numpuertas_auto,a.Numasientos_auto,a.Documento_auto,a.Precio,a.Garantia_auto,SUBSTRING(a.Foto_auto, 8) as Foto_auto,a.Stock_auto,a.Updated_at 
                            FROM tipoauto as ta,institucion as i,ciudad as c,combustible as co,tipotransmision as tt, traccion as t,automotores as a 
                            WHERE  a.Id_tipoauto=ta.Id_tipoauto and a.Id_inst=i.Id_inst and a.Id_ciudad=c.Id_ciudad and a.Id_combustible=co.Id_combustible 
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
                            $utd="http://localhost/aymbol/public/storage/".$fotito;
                                                                ?>
                      
                  
               <div  class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="<?php echo $idm?>">
                        <div  class="relative w-auto my-6 mx-auto max-w-3xl">
                            <!--content-->
                            
                                <div  style="justify-content:center" class=" bg-blueGray-200 border-0 rounded-lg shadow-lg relative flex flex-col w-full  background-color:black outline-none focus:outline-none">
                                 <!--header-->
                                 
                                            <div style="background-image:url(https://image.freepik.com/foto-gratis/hermoso-auto-comercial-noche_23-2148283413.jpg)" class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold text-white">
                                                AUTO EN VENTA
                                                </h3>
                                                <button class="p-1 ml-auto bg-transparent border-0 text-white  float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('<?php echo $idm?>')">
                                              <span class="bg-transparent text-white h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                X
                                              </span>
                                              </button>
                                            </div>
                                            <div class="text-white " style="margin-left:20px;background-color:black ">
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
                            <div style="background-image:url(https://image.freepik.com/foto-gratis/hermoso-auto-comercial-noche_23-2148283413.jpg)">
                            <label class="text-white"for=""><?php echo "PRECIO :".$precio." $";?> </label>
                                         
                                            </div>  

                                </div>
                                
                        </div>
                        
            </div>

             <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="<?php echo $idm."yu"; ?>"></div>
             </div>

      <?php
      }
      ?>           
             
</div>

                                    </div>
                            </div>
                    </div>
                    
              </div>
              <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "yu").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "yu").classList.toggle("flex");
  }
</script>
</html>
@endsection 