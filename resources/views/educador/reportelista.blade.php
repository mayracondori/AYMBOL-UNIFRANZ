@extends('plantilla.modeloeducador')
@section('title.EDUCADOR')
@section('content')
<?php

$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'aymbol1';
$bd =mysqli_select_db ($coneccion, $basededatos);


$milogueo= session('Correo_inst');    
                $c123 = "SELECT * FROM institucion where Correo_inst='$milogueo'";
                $r1 = mysqli_query($coneccion, $c123);
                
                while ($re = mysqli_fetch_array($r1)) {
                  $milogueoid=$re ['Id_inst']; 
                  
                }
?>

<div  class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
         <div class="w-full ">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 style="color:#FCFDFF" class="text-blueGray-500 text-sm font-bold">
                    VEA LAS ESTADÍSTICAS DE SUS CURSOS
                    </h6>
                    </div>


    
    <table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr style="color:#FCFDFF" >
                        <th class="p-3 text-center">NOMBRE DEL CURSO</th>
                        
                        
                    <th class="p-3 text-center">Ver</th>
                    <th></th>

                          </tr>
					</thead>

					<tbody>
					<?php

  $codigo = "SELECT c.Id_curso, c.Nom_curso,c.Duracion_curso,c.Contenido_curso,i.Nom_inst,c.moa_curso,SUBSTRING(c.Imagen_curso, 8) as Imagen_curso FROM cursos as c, institucion as i WHERE  c.Id_inst=$milogueoid and c.Id_inst=i.Id_inst";
	
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {

?>
						<tr>
						<form method="POST" action="{{'reportecursos'}}">
@csrf
							<td><?php echo $rest ['Nom_curso']; ?></td>
                            <td ><input type="submit" name="boton" value="VER "> </td>
                            <TD><input type="hidden" name="Id_curso" value="<?php echo $rest['Id_curso']; ?>">
							</TD>
						 </form>
                        </tr>

					<!--/Card-->
			<?php
		}

        ?>

					</tbody>

				</table>
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