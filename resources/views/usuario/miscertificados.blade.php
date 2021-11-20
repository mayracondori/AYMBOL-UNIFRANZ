@extends('plantilla.modelousuario')
@section('title.USUARIO')
@section('content')

 <?php $milogueo= session('Correo_usu');    
                
               
                    
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
                  MIS CERTIFICADOS
                    </h6>
                    </div>


    
    <table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr style="color:#FCFDFF" >
                        <th class="p-3 text-center">NOMBRE DEL CURSO</th>
                        <th class="p-3 text-center">INSTITUCION</th>
                        <th class="p-3 text-center">FECHA </th>
                    <th class="p-3 text-center">Ver</th>
                    <th></th>

                          </tr>
					</thead>

					<tbody>
					<?php 
             
             $coneccion = mysqli_connect ("localhost", "root", "" );
             $basededatos = 'aymbol1';
             $bd =mysqli_select_db ($coneccion, $basededatos);
             $c123 = "SELECT c.Id_con, u.Nom_usu ,u.App_usu,u.Apm_usu, cur.Id_curso,cur.Nom_curso,c.Documento_con,c.Fechainicio_con,c.Fechafin_con,c.Certificado_con,c.Calificacion_con,c.Created_at,c.Updated_at, i.Nom_inst
             FROM conncursos as c,usuario as u, cursos as cur , institucion as i
             WHERE u.Correo_usu='$milogueo' and u.Id_usu=c.Id_usu and c.Id_curso=cur.Id_curso and cur.Id_inst=i.Id_inst and c.Certificado_con='CREADO'";
             $r1 = mysqli_query($coneccion, $c123);
             
             while ($rest = mysqli_fetch_array($r1)) {
             
?>
						<tr>
						<form method="POST" action="{{'pdfcertificado'}}">
@csrf
							<td><?php echo $rest ['Nom_curso']; ?></td>
                            
							<td><?php echo $rest ['Nom_inst']; ?></td>
							<td><?php echo $rest ['Updated_at']; ?></td>
                            <td ><input type="submit" name="boton" value="VER CERTIFICADO "> </td>
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