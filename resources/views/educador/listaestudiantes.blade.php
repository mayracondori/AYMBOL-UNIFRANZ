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
                    LISTA DE ESTUDIANTES
                    </h6>
                    </div>


    
    <table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr style="color:#FCFDFF" >
                        <th class="p-3 text-center">NOMBRE DEL CURSO</th>
                        <th class="p-3 text-center">NOMBRE DEL ESTUDIANTE</th>
                        <th class="p-3 text-center">CERTIFICADO</th>
                         <th class="p-3 text-center">CALIFICACIÓN</th>
                        
                    <th class="p-3 text-center">Ver</th>
                    <th></th>

                          </tr>
					</thead>

					<tbody>
					<?php

  $codigo = "SELECT c.Id_con, u.Id_usu,u.Nom_usu,u.App_usu,u.Apm_usu, cur.Nom_curso, c.Certificado_con, c.Calificacion_con
  FROM usuario as u, cursos as cur, conncursos as c
  WHERE cur.Id_inst=$milogueoid and cur.Id_curso=c.Id_curso and c.Id_usu=u.Id_usu";
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {

?>
						<tr>
						<form method="POST" action="{{'detalleestudiante'}}">
@csrf
							<td><?php echo $rest ['Nom_curso']; ?></td>
                            
							<td><?php echo $rest ['Nom_usu']." ".$rest ['App_usu']." ".$rest ['Apm_usu']; ?></td>
							<td><?php 
              if($rest ['Certificado_con']==""){
                $var="NO";
              }else{
                $var="SI";
              }
              echo $var ?></td>
              <td><?php 
              if($rest ['Calificacion_con']==""){
                $cali= "AUN NO CULMINA EL CURSO";
              }else{
                $cali= $rest ['Calificacion_con'];
              }
              echo $cali ?></td>
                            <td ><input type="submit" name="boton" value="VER "> </td>
                            <TD><input type="hidden" name="Id_con" value="<?php echo $rest['Id_con']; ?>">
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