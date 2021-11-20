
<!DOCTYPE html>
<html >
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
    <title>ADMINISTRADOR</title>
  </head>
  <body class=" antialiased">
    
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
            class="text-white md:block text-left md:pb-2 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
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
            <!-- Divider -->
            <h4> <?php $milogueo= session('Correo_usu');    
                
                            
                $coneccion = mysqli_connect ("localhost", "root", "" );
                $basededatos = 'aymbol1';
                $bd =mysqli_select_db ($coneccion, $basededatos);
                $c123 = "SELECT * FROM usuario where Correo_usu='$milogueo'";
                $r1 = mysqli_query($coneccion, $c123);
                
                while ($re = mysqli_fetch_array($r1)) {
                  $milogueoid=$re ['Id_usu']; 
                  $nom1=$re ['Nom_usu'];
                  $ap=$re ['App_usu'];
                  $am=$re['Apm_usu'];
                }
                    echo $nom1." ".$ap." ".$am;
                    ?>  </h4> 
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
              INFORMATIVO
            </h6>
            <!-- Navigation -->

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/admin/nuevainformacion"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                  NUEVA INFORMACION
                </a>
              </li>
              <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/admin/listainformacion"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                  LISTA DE INFORMACION
                </a>
                </li>
                <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/admin/listaautos"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                  LISTA DE TIPOS DE AUTOS
                </a>
                </li>
                <li class="items-center">
                <a
                  href="http://localhost/aymbol/public/admin/listamotos"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                  LISTA DE TIPOS DE MOTOS
                </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              VENTAS
            </h6>
            <!-- Navigation -->

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="items-center">
                <a
                href="http://localhost/aymbol/public/admin/vendedores"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                  ></i>
                 LISTA VENDEDORES
                </a>
              </li>

              <li class="items-center">
                <a
                href="http://localhost/aymbol/public/admin/nuevainformacion"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"
                  ></i>
                  LISTA MOTOCICLETAS EN VENTA
                </a>
              </li>
              <li class="items-center">
                <a
                  href="../profile.html"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"
                  ></i>
                  LISTA AUTOS EN VENTA
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              CLASES
            </h6>
            <!-- Navigation -->
            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="inline-flex">
                <a
                href="http://localhost/aymbol/public/admin/autoescuelas"
                  target="_blank"
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                >
                  <i
                    class="fas fa-paint-brush mr-2 text-blueGray-300 text-base"
                  ></i>
                  AUTOESCUELAS
                </a>
              </li>

              <li class="inline-flex">
                <a
                  href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus"
                  target="_blank"
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                >
                  <i
                    class="fab fa-css3-alt mr-2 text-blueGray-300 text-base"
                  ></i>
                  ESTUDIANTES
                </a>
              </li>

              <li class="inline-flex">
                <a
                  href="https://www.creative-tim.com/learning-lab/tailwind/angular/overview/notus"
                  target="_blank"
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                >
                  <i
                    class="fab fa-angular mr-2 text-blueGray-300 text-base"
                  ></i>
                  CURSOS
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <div 
    style="background-image:url('https://www.elsoldesanluis.com.mx/incoming/g9dzuz-carretera-noche.jpg/ALTERNATES/LANDSCAPE_1140/Carretera%20noche.jpg')" class="relative md:ml-64 ">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="./index.html"
              >INICIO</a
            >
            
           
          </div>
        </nav>


      
      @yield('content')



      <footer class="block py-4" style="  bottom: 0;">
            <div class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 " />
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
    <script type="text/javascript">
      /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById(
            "get-current-year"
          ).innerHTML = new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
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

      (function () {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [40, 68, 86, 74, 56, 60, 87],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white",
            },
            legend: {
              labels: {
                fontColor: "white",
              },
              align: "end",
              position: "bottom",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white",
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white",
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 8,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 8,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)",
              },
              align: "end",
              position: "bottom",
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month",
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>
  </body>
</html>
