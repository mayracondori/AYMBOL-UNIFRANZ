@extends('plantilla.modeloeducador')
@section('title.EDUCADOR')
@section('content')
<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                     
                      <h2 class="text-white text-xl font-semibold">
                      CALIFICACION DE LOS CURSOS POR LOS ESTUDIANTES 
                      </h2>
                    </div>
                  </div>
                </div>


                <?php
                $cursoid=$_POST['Id_curso'];

$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'aymbol1';
$bd =mysqli_select_db ($coneccion, $basededatos);

$milogueo= session('Correo_inst'); 

$codigo = "SELECT c.Id_curso, c.Nom_curso,c.Duracion_curso,c.Contenido_curso,c.moa_curso,SUBSTRING(c.Imagen_curso, 8) as Imagen_curso FROM cursos as c WHERE  c.Id_curso=$cursoid ";
  
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {
$nom=$rest['Nom_curso'];
}
    ?>
    <h1 class="text-white"><?php echo $nom?></h1>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative "><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="line-chart" style="display: block; width: 100%; height: 500px;" width="829" height="150" class="chartjs-render-monitor"></canvas>
                
                </div>

                </div>
               


              </div>
     
              @endsection
              
@section('script')
<?php
 $codigo31 = " SELECT COUNT(Id_curso) as inscritos FROM conncursos WHERE Id_curso=$cursoid";
        
 $resultado31= mysqli_query($coneccion, $codigo31);

 while ($rest31 = mysqli_fetch_array($resultado31)) {
$inscri=$rest31['inscritos'];

 }
         
          $codigo3 = "SELECT Id_curso, AVG(Ense_cal) as Ense_cal,AVG(Conte_cal) as Conte_cal, AVG(Multi_cal) as Multi_cal FROM calificacion where Id_curso=$cursoid GROUP by Id_curso";
        
          $resultado3 = mysqli_query($coneccion, $codigo3);
        
          while ($rest3 = mysqli_fetch_array($resultado3)) {
          $ense=$rest3['Ense_cal'];
          $conte=$rest3['Conte_cal'];
          $multi=$rest3['Multi_cal'];
          }?>
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

      

         
         ( function () {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
                
              "MÉTODO DE ENSEÑANZA",
              "CONTENIDO",
              "MULTIMEDIA",
            ],
            datasets: [
              {
                label: "CALIFICACION PROMEDIO",
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [<?php echo  $ense?>,<?php echo  $conte?>, <?php echo $multi?>],
                fill: false,
              },
              {
                label: "NÚMERO DE INSCRITOS",
                fill: false,
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [<?php echo $inscri?>, <?php echo $inscri?>, <?php echo $inscri?>],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "AYMBOL",
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
        var ctx =document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

      })
     
     
      ();
     
    </script>
     

@endsection