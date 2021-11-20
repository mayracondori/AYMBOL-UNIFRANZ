
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="https://cookieless.MySite.com/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../../assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.css" />
    <title>@yield('title')AYMBOL</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="../../index.html"
            >AYMBOL</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
         
          <ul
            class="flex flex-col lg:flex-row list-none lg:ml-auto items-center"
          >
            <li class="inline-block relative">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                onclick="openDropdown(event,'demo-pages-dropdown')"
              >
                INICIO
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="demo-pages-dropdown"
              >
                <span
                  class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400"
                >
                 Te ofrecemos...
                </span>
                <a
                  href="http://localhost/aymbol/public/opcionesinfo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >
                  INFORMACIÓN
                </a>
               
               
                <a
                  href="http://localhost/aymbol/public/login"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >
                INICIAR SESION
                </a>
                <a
                  href="http://localhost/aymbol/public/registro"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >
                 REGISTRO
                </a>
                <a
                  href="http://localhost/aymbol/public/registroinst"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >
                 REGISTRO INSTITUCION
                </a>
                
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F"
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-facebook text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">COMPARTIR</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-twitter text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">TWEET</span></a
              >
            </li>
            
  
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-repeat"
          style="background-image: url(https://i.blogs.es/dbca7a/fondo/1366_2000.jpeg)"
        ></div>

        @yield('content')
    

        <div id="whatsapp-icon" style="position:fixed; left:30px; bottom:10px; text-align:center; padding:10px">
        <a href="https://api.whatsapp.com/send?phone=591679755363&text=Hola%20AYMBOL%20tengo%20problemas%20con%20el%20sistema.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png" width="50" height="50"><p class="text-black">Soporte Técnico</p></a>
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
        <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
          <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-blueGray-600" />
            <div
              class="flex flex-wrap items-center md:justify-between justify-center"
            >
              <div class="w-full md:w-4/12 px-4">
                <div
                  class="text-sm text-white font-semibold py-1 text-center md:text-left"
                >
                 AYMBOL <span id="get-current-year"></span>
                  <a
                    href="https://www.creative-tim.com?ref=njs-login"
                    class="text-white hover:text-blueGray-300 text-sm font-semibold py-1"
                    >Creando conexiones, rompiendo barreras</a
                  >
                </div>
              </div>
              <div class="w-full md:w-8/12 px-4">
                <ul
                  class="flex flex-wrap list-none md:justify-end justify-center"
                >
                 
      
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </section>
    </main>
  </body>
  