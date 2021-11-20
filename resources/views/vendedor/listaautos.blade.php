@extends('plantilla.modelovendedor')
@section('title.VENDEDOR')
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
                    LISTA DE AUTOS 
                    </h6>
                    </div>


    
    <table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr style="color:#FCFDFF" >
                        <th class="p-3 text-center">Tipo de auto</th>
                        <th class="p-3 text-center">Marca de auto</th>
                        <th class="p-3 text-center">Modelo de auto</th>
                        <th class="p-3 text-center">Color</th>
                        <th class="p-3 text-center">Precio</th>
                      <th class="p-3 text-center">Vendida por</th>
                    <th class="p-3 text-center">Ciudad</th>
                    <th class="p-3 text-center">Ver</th>
                    <th></th>

                          </tr>
					</thead>

					<tbody>
					<?php

  $codigo = "SELECT a.Id_auto,ta.Nom_tipoauto,i.Nom_inst,c.Nom_ciudad,co.Nom_combustible,a.Marca_auto,a.Modelo_auto,a.Color_auto,a.ModAnio_auto,t.Nom_traccion,
  a.Numpuertas_auto,a.Numasientos_auto,a.Documento_auto,a.Precio,a.Garantia_auto,a.Foto_auto,a.Stock_auto,a.Updated_at 
  FROM tipoauto as ta,institucion as i,ciudad as c,combustible as co,tipotransmision as tt, traccion as t,automotores as a 
  WHERE a.Id_tipoauto=ta.Id_tipoauto and a.Id_inst=i.Id_inst and a.Id_ciudad=c.Id_ciudad and a.Id_combustible=co.Id_combustible 
  and a.Id_tipotrans=tt.Id_tipotrans and a.Id_traccion= t.Id_traccion";
	
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {

?>
						<tr>
						<form method="POST" action="{{'detalleautos'}}">
@csrf
							<td><?php echo $rest ['Nom_tipoauto']; ?></td>
                            
							<td><?php echo $rest ['Marca_auto']; ?></td>
							<td><?php echo $rest ['Modelo_auto']; ?></td>
							<td><?php echo $rest ['Color_auto']; ?></td>
              <td><?php echo $rest ['Precio']; ?></td>
              <td><?php echo $rest ['Nom_inst']; ?></td>
              <td><?php echo $rest ['Nom_ciudad']; ?></td>
                            <td ><input type="submit" name="boton" value="VER "> </td>
                            <TD><input type="hidden" name="Id_auto" value="<?php echo $rest['Id_auto']; ?>">
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