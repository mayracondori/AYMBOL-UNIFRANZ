<!DOCTYPE html>
<html lang="es" style="margin: 0;">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body style=" margin: 0mm 0mm 0mm 0mm;" ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<?php

$codigo1= session('Correo_usu');
$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'aymbol1';
$bd =mysqli_select_db ($coneccion, $basededatos);

$idconn= session('pdfcerti');
//echo $idsolicitud;

        $consultita="SELECT c.Id_con, u.Nom_usu ,u.App_usu,u.Apm_usu, cur.Id_curso,cur.Nom_curso,c.Documento_con,c.Fechainicio_con,c.Fechafin_con,c.Certificado_con,c.Calificacion_con,c.Created_at,c.Updated_at, i.Nom_inst
         FROM conncursos as c,usuario as u, cursos as cur , institucion as i
         WHERE c.Id_con=$idconn and c.Id_usu=u.Id_usu  and c.Id_curso=cur.Id_curso and cur.Id_inst=i.Id_inst";
         $resultado2=mysqli_query($coneccion,$consultita);
         while($rest2=mysqli_fetch_array($resultado2)){
         
            ?>


<div style="">
 <form enctype="multipart/form-data" action="{{('micertificado')}}" method="POST">
@csrf
      <input type="hidden" name="idconn" value="<?php echo $idconn ?>">

      <div class="row">
      <div class="column">
<img  style="margin-left:50px" height="80"  src="http://localhost/aymbol/public/logo.png" class="object-left-top object-scale-down h-16 w-full ">

</div>
<?php
      
                $utd="http://localhost/aymbol/public/qrcodes/qrcode".$rest2['Id_con'].".png";
                ?>
                <div class="column">
                 <img  style="margin: 0px 0px 0px 100px; "src="<?php echo $utd;?>">
                 </div>
                 </div>
<div style="opacity: 0.5;
color: BLACK;
position: absolute;
">
  <p  style="margin: 700px 5px 5px 5px; " > AYMBOL  Creando conexiones, rompiendo barreras.</p>
     
</div>
<strong>
<label style=" margin-left: 100px;" class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2"><?php echo "EL INSTITUTO ".$rest2['Nom_inst'];?></label>
<br>
<label style=" margin-left: 100px;" class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">A TRAVÉS DE LA PLATAFORMA EDUCATIVA "AUTOS Y MOTOS BOLIVIA"</label>

<br>
<label style=" margin-left: 100px;" class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">OTORGA EL PRESENTE</label>

<br>
<BR></BR>
       <br> <label style=" margin-left: 100px;">CERTIFICADO</label>
       </strong>
<BR></BR>

<br>

<label style=" margin-left: 130px;" class="  text-center tracking-wide text-black ">A:  </label>
<strong>
<label style=" margin-left: 130px;" class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">

<?php echo " ".$rest2['Nom_usu']." ".$rest2['App_usu']." ".$rest2['Apm_usu'].","; ?>
</label>
</strong>
<p style=" margin-left: 130px;"> <?php echo "Por haber concluido satisfactoriamente el curso ".$rest2['Nom_curso']." mismo que fue dictado de forma virtual en la plataforma AYMBOL como parte de la capacitación de usuarios en el área automotriz. "?></p>

<br>
<BR></BR>

<label style=" margin-left: 300px;"class=" tracking-wide text-center text-black ">La Paz 

<?php echo ", ".$rest2['Updated_at']; ?>
</label>


<BR></BR>
<?php
         }
     
 ?>
<BR></BR>
</div>


</body>

</html>
