@extends('plantilla.modeloadmin')
@section('title.ADMIN')
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
                      REGISTRO DE NUEVA INFORMACIÓN
                    </h6>
                  </div>
                 
                  </div>
                  <hr class="mt-6 border-b-1 border-blueGray-300" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  
                <form enctype="multipart/form-data" method="POST" action="{{route('nuevainfo')}} " autocomplete="off" >
    @csrf
    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       TIPO DE INFORMACION
                      </label>
                      <select class="bg-gray-200 text-black border border-gray-200 py-3" name="Id_tipoinfo" id="Id_tipoinfo"  style="width:400px;">
                    <?php
                 $codigo = "select * from tipoinfo";
                 $resultado = mysqli_query( $coneccion, $codigo );
                 echo "<option value='0' selected='selected'>Seleccionar</option>";
                 while( $rest = mysqli_fetch_array( $resultado ) )
                 { ?>
                 <option value="<?php echo $rest['Id_tipoinfo'];?>"> <?php echo $rest['Nom_tipoinfo'] ;?> </option>

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
                       TÍTULO
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Titulo" id="Titulo_info" name="Titulo_info" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        DESCRIPCIÓN DE LA INFORMACIÓN
                      </label>
<textarea  cols="30" rows="10" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                 name="Descripcion_info" required
                     >

</textarea>

                     
                    </div>
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        IMAGEN
                      </label>
                    
            <input type="file" accept="image/*" capture="camera" name="avatar" required></div>



        </div>

                    
                    <div class="relative w-full mb-3">
                      <label style="color:#FCFDFF"
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        FUENTE 
                      </label>
                      <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Ingrese el link de donde obtuvo la información" id="Fuente_info" name="Fuente_info" required
                      />
                    
                      </div>

                      <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        CREAR NUEVA INFORMACIÓN
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