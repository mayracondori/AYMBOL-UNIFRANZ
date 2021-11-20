
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	  <!--Replace with your tailwind.css once created-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>

	 <!--Regular Datatables CSS-->
	 <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../../assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.css" />
    <title>EDUCADOR</title>
  </head>
  <body class="text-blueGray-100 antialiased">
    
    <div id="root">
      <nav  style="background-image: url(https://static.vecteezy.com/system/resources/previews/002/173/512/non_2x/grid-lines-pattern-on-dark-blue-background-and-texture-with-lighting-effect-vector.jpg)"
        class=" md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
      
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-white opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i>
          </button>
          <a
            class="md:block text-white text-left md:pb-2 text-blueGray-100 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="http://localhost/aymbol/public/login"
          >
            AYMBOL 
          
          </a>
          
          <div
            class="text-white md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-blueGray-100 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="../../index.html"
                  >
                    AYMBOL
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
              <div class="mb-3 pt-0">
                <input
                  type="text"
                  placeholder="Buscar"
                  class="border-0 px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                />
              </div>
            </form>
            <h4> <?php 
            $milogueo= session('Correo_inst');    
                
                            
                $coneccion = mysqli_connect ("localhost", "root", "" );
                $basededatos = 'aymbol1';
                $bd =mysqli_select_db ($coneccion, $basededatos);
                $c123 = "SELECT * FROM institucion where Correo_inst='$milogueo'";
                $r1 = mysqli_query($coneccion, $c123);
                
                while ($re = mysqli_fetch_array($r1)) {
                  $milogueoid=$re ['Id_inst']; 
                  $nom1=$re ['Nom_inst'];
                                  }
                    ?>  </h4> 
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-100 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              PRINCIPAL
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  href="./dashboard.html"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-100 "
                >
                  <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                  INICIO
                </a>
              </li>

              <li class="items-center">
                <a
                  href="./settings.html"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                  MIS DATOS
                </a>
              </li>

             
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              CURSOS
            </h6>
            <!-- Navigation -->

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/nuevocurso"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                 NUEVO CURSO
                </a>
              </li>
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/nuevocontenido"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                 NUEVO CONTENIDO
                </a>
              </li>
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/nuevaevaluacion"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                 NUEVA EVALUACIÓN
                </a>
              </li>
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/listacursosauto"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                 LISTA CURSOS-AUTOS
                </a>
              </li>
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/listacursosmoto"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                  LISTA CURSOS-MOTOS
                </a>
              </li>
              
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              ESTUDIANTES
            </h6>
            <!-- Navigation -->

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/listaestudiantes"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                  ></i>
                 LISTA ESTUDIANTES
                </a>
              </li>
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/evaluacionesrevisadas"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                  ></i>
                 EVALUACIONES REVISADAS
                </a>
              </li><li class="items-center">
                <a
                  href="http://localhost/aymbol/public/educador/evaluacionesporrevisar"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                  ></i>
                EVALUACIONES POR REVISAR
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              ESTADÍSTICAS
            </h6>
            <!-- Navigation -->
            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="inline-flex">
                <a
                  href="http://localhost/aymbol/public/educador/reportelista"
               
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                >
                  <i
                    class="fas fa-paint-brush mr-2 text-blueGray-300 text-base"
                  ></i>
                  POR CURSO
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <div  style="background-image: url(https://www.xtrafondos.com/descargar.php?id=3040&resolucion=1280x768); background-repeat: no-repeat; background-size: cover"
    class="relative md:ml-64 bg-blueGray-100">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="http://localhost/aymbol/public/login"
              >INICIO</a
            >
            
           
          </div>
        </nav>


      
      @yield('content')



      <footer class="block py-4 ">
            <div style="margin-button: 0px" class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 border-blueGray-200" />
              <div
                class="flex flex-wrap items-center md:justify-between justify-center"
              >
                
                <div class="w-full md:w-8/12 px-4">
                  <ul
                    class="flex flex-wrap list-none md:justify-end justify-center"
                  >
                    AYMBOL Rompiendo cadenas, creando conexiones.
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    
      
    @yield('script')

  </body>
</html>
