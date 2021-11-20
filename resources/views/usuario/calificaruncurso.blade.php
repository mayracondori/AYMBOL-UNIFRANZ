@extends('plantilla.modelousuario')
@section('title.USUARIO')
@section('content')
<?php 
         $curso= session('calicur');  
         
         $coneccion = mysqli_connect ("localhost", "root", "" );
         $basededatos = 'aymbol1';
         $bd =mysqli_select_db ($coneccion, $basededatos);
         $con=1;
                  $codigo2 = "SELECT * FROM cursos  where Id_curso=$curso";
                  $resultado2 = mysqli_query($coneccion, $codigo2);
                while ($rest2 = mysqli_fetch_array($resultado2)) {
                  $cursonom=$rest2['Nom_curso'];
                  
                }?>
<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
             <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                   CALIFICA EL CURSO QUE PASASTE
                </label>
                <h2><?php echo $cursonom?></h2>
                <br>
                <label for="">Cuanto le darias del 1 al 10 en :</label>
               
    <form  method="POST" action="{{route('usuario.calicurso')}} " autocomplete="off" >
                @csrf
                        <LABel>Metodo de enseñanza</LABel>           
                    <div>
                        <input type="number" id="ense" name="ense" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <LABel>Contenido</LABel>     
        
                    <div class="mt-7">                
                        <input type="number" id="conte" name="conte" class=" text-align-center mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>
                    <LABel>Multimedia</LABel>     
                    <div class="mt-7">                
                        <input type="number" id="multi" name="multi" class=" text-align-centermt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>
                    <input type="hidden" id="Id_curso" name="Id_curso" value="<?php echo $curso?>" class=" text-align-centermt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                   
                    <div class="mt-7">
                        <button class=" text-align-center bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            ENVIAR
                        </button>
                    </div>
        
                   
        
                </form>
            
        </div>
    </div>
</div>
@endsection