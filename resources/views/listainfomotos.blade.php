@extends('plantilla.modelo')
@section('title.USUARIO')
@section('content')
<?php

$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'aymbol1';
$bd =mysqli_select_db ($coneccion, $basededatos);


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
                    LISTA DE TIPOS DE MOTOS
                    </h6>
                    </div>

                <div class="text-white" style="background-color: rgba(0, 0, 0, .5);">
    
    <table id="example" class="stext-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr style="color:#FCFDFF" >
                        <th class="p-3 text-center">Titulo</th>
                         <th class="p-3 text-center">Link de la fuente</th>
                    <th class="p-3 text-center">Última actualización</th>
                    <th class="p-3 text-center">Ver</th>
                    <th></th>

                          </tr>
					</thead>

					<tbody>
					<?php

  $codigo = "SELECT * FROM informacion where id_tipoinfo=2 order by Updated_at desc";
	
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {

?>
						<tr>
						<form method="POST" action="{{'infodescripcion'}}">
@csrf
							<td><?php echo $rest ['Titulo_info']; ?></td>
							<td><?php echo $rest ['Fuente_info']; ?></td>
							<td><?php echo $rest ['Updated_at']; ?></td>
							<td><input type="hidden" name="Id_info" value="<?php echo $rest['Id_info']; ?>">
							</td>
                            <td ><input type="submit" name="boton" value="VER "> </td>
                            
						 </form>
                        </tr>

					<!--/Card-->
			<?php
		}

        ?>

					</tbody>

				</table></div>
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