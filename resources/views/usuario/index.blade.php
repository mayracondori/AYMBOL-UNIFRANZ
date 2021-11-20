@extends('plantilla.modelousuario')
@section('title.USUARIO')
@section('content')
<img src="https://i.pinimg.com/originals/49/36/58/49365811a1a741648ac9837030d1c554.jpg" alt="">
<?php $codigo3= session('Correo_usu');    
echo $codigo3;?>                    
@endsection 