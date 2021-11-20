@extends('plantilla.modelovendedor')
@section('title.VENDEDOR')
@section('content')
<?php

$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'aymbol1';
$bd =mysqli_select_db ($coneccion, $basededatos);


?>
<div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 style="color:#FCFDFF" class="text-blueGray-500 text-sm font-bold">
                      REGISTRO DE NUEVO AUTO
                    </h6>
                  </div>
                 
                  </div>
                  <hr class="mt-6 border-b-1 border-blueGray-300" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  
                <form enctype="multipart/form-data" method="POST" action="{{route('nuevoauto')}} " autocomplete="off" >
    @csrf
    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       TIPO DE AUTO 
                      </label>
                      <select class="bg-gray-200 text-black border border-gray-200 py-3" name="Id_tipoauto" id="Id_tipoauto"  style="width:400px;">
                    <?php
                 $codigo = "select * from tipoauto";
                 $resultado = mysqli_query( $coneccion, $codigo );
                 echo "<option value='0' selected='selected'>Seleccionar</option>";
                 while( $rest = mysqli_fetch_array( $resultado ) )
                 { ?>
                 <option value="<?php echo $rest['Id_tipoauto'];?>"> <?php echo $rest['Nom_tipoauto'] ;?> </option>

                <?php
                }

                 ?>
                    </select>
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       CIUDAD 
                      </label>
                      <select class="bg-gray-200 text-black border border-gray-200 py-3" name="Id_ciudad" id="Id_ciudad"  style="width:400px;">
                    <?php
                 $codigo = "select * from ciudad";
                 $resultado = mysqli_query( $coneccion, $codigo );
                 echo "<option value='0' selected='selected'>Seleccionar</option>";
                 while( $rest = mysqli_fetch_array( $resultado ) )
                 { ?>
                 <option value="<?php echo $rest['Id_ciudad'];?>"> <?php echo $rest['Nom_ciudad'] ;?> </option>

                <?php
                }

                 ?>
                    </select>
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       COMBUSTIBLE QUE UTILIZA
                      </label>
                      <select class="bg-gray-200 text-black border border-gray-200 py-3" name="Id_combustible" id="Id_combustible"  style="width:400px;">
                    <?php
                 $codigo = "select * from combustible";
                 $resultado = mysqli_query( $coneccion, $codigo );
                 echo "<option value='0' selected='selected'>Seleccionar</option>";
                 while( $rest = mysqli_fetch_array( $resultado ) )
                 { ?>
                 <option value="<?php echo $rest['Id_combustible'];?>"> <?php echo $rest['Nom_combustible'] ;?> </option>

                <?php
                }

                 ?>
                    </select>
                    </div>


    <br>
    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       MARCA
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Marca" id="Marca_auto" name="Marca_auto" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       MODELO 
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Modelo" id="Modelo_auto" name="Modelo_auto" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       AÑO DEL MODELO 
                      </label>
                      <input
                        type="number"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Año del modelo" id="ModAnio_auto" name="ModAnio_auto" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                      COLOR
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Color" id="Color_auto" name="Color_auto" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                      Motor 
                      </label>
                      <input
                        type="number"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Ingresar dato en cc" id="Motor_auto" name="Motor_auto" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       TIPO DE TRANSMISION
                      </label>
                      <select class="bg-gray-200 text-black border border-gray-200 py-3" name="Id_tipotrans" id="Id_tipotrans"  style="width:400px;">
                    <?php
                 $codigo = "select * from tipotransmision";
                 $resultado = mysqli_query( $coneccion, $codigo );
                 echo "<option value='0' selected='selected'>Seleccionar</option>";
                 while( $rest = mysqli_fetch_array( $resultado ) )
                 { ?>
                 <option value="<?php echo $rest['Id_tipotrans'];?>"> <?php echo $rest['Nom_tipotrans'] ;?> </option>

                <?php
                }

                 ?>
                    </select>
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       TIPO DE TRACCION
                      </label>
                      <select class="bg-gray-200 text-black border border-gray-200 py-3" name="Id_traccion" id="Id_traccion"  style="width:400px;">
                    <?php
                 $codigo = "select * from traccion";
                 $resultado = mysqli_query( $coneccion, $codigo );
                 echo "<option value='0' selected='selected'>Seleccionar</option>";
                 while( $rest = mysqli_fetch_array( $resultado ) )
                 { ?>
                 <option value="<?php echo $rest['Id_traccion'];?>"> <?php echo $rest['Nom_traccion'] ;?> </option>

                <?php
                }

                 ?>
                    </select>
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       NUMERO DE PUERTAS
                      </label>
                      <input
                        type="number"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Puertas" id="Numpuertas_auto" name="Numpuertas_auto" required
                        />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       NUMERO DE ASIENTOS 
                      </label>
                      <input
                        type="number"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Asientos" id="Numasientos_auto" name="Numasientos_auto" required
                        />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       DOCUMENTACION
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Que documentos incluye con el precio de venta?" id="Documento_auto" name="Documento_auto" required
                        />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       PRECIO
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Precio en dólares" id="Precio" name="Precio" required
                        />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       GARANTÍA
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Cuenta con garantía?De cuanto tiempo?" id="Garantia_auto" name="Garantia_auto" required
                        />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       FOTO DEL AUTO
                      </label>
                    
            <input type="file" accept="image/*" capture="camera" name="avatar" required></div>



        </div>                 
                  

                      <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        CREAR NUEVO AUTO EN VENTA
                      </button>
                    </div>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById(
          "get-current-year"
        ).innerHTML = new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start",
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html>

@endsection