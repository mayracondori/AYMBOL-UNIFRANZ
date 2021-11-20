

@extends('plantilla.modeloeducador')
@section('title.EDUCADOR')
@section('content')

 <?php $milogueo= session('Correo_inst');    
                
                            
                $coneccion = mysqli_connect ("localhost", "root", "" );
                $basededatos = 'aymbol1';
                $bd =mysqli_select_db ($coneccion, $basededatos);
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
                  EVALUACIONES REVISADAS
                    </h6>
                    </div>


    
    <table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr style="color:#FCFDFF" >
                        <th class="p-3 text-center">NOMBRE DEL CURSO</th>
                        <th class="p-3 text-center">NOMBRE DEL ESTUDIANTE</th>
                        <th class="p-3 text-center">FECHA DE ENVIO</th>
                        <th class="p-3 text-center">CALIFICACION</th>
                        <th class="p-3 text-center">FECHA DE CALIFICACION</th>
                        
                    <th class="p-3 text-center">Ver</th>
                    <th></th>

                          </tr>
					</thead>

					<tbody>
					<?php 

  $codigo = "SELECT con.Id_con,c.Id_curso,c.Nom_curso, u.Nom_usu,u.App_usu,u.Apm_usu,r.Created_at, SUM(r.Calificacion_res) as cali, r.Updated_at 
  FROM conncursos as con,cursos as c, usuario as u , respuestasevaluacion as r, preguntasevaluacion as p
  WHERE con.Id_curso=c.Id_curso and con.Id_usu=u.Id_usu and c.Id_curso=p.Id_curso and p.Id_pre=r.Id_pre  and con.Certificado_con ='CREADO' GROUP BY c.Nom_curso";
	
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {

?>
						<tr>
						<form method="POST" action="{{'verevaluacionrevisada'}}">
@csrf
							<td><?php echo $rest ['Nom_curso']; ?></td>
                            <td><?php echo $rest ['Nom_usu']." ".$rest ['App_usu']." ".$rest ['Apm_usu'] ; ?></td>
							<td><?php echo $rest ['Created_at']; ?></td>
							<td><?php echo $rest ['cali']; ?></td>
							<td><?php echo $rest ['Updated_at']; ?></td>
                            <td ><input type="submit" name="boton" value="VER "> </td>
                            <TD><input type="hidden" name="Id_cur" value="<?php echo $rest['Id_curso']; ?>">
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