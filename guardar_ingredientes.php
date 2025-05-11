<?php


//obtener los datos del form :)=

$nombreingre= $_POST['nombre'];
$cantidadingre=$_POST['cantidad'];
$mostrarModal = !empty($nombreingre) && !empty($cantidadingre);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGREDIENTE_CREADO</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
<div class="bg-orange-500 w-full size-10 content-center">
<h1 class="ml-1 text-white font-bold text-2xl text-center">
INGREDIENTE CREADO
</h1>   
<img src="IMG/logo_final.png" alt="Descripción" class="absolute top-0 right-0 w-10 h-8 m-1.5 ">
</div>
<div class="bg-gray-200 border-orange-600 border-b-4 border-r-4 my-3 pb-3 flex flex-col items-center max-w-md mx-auto">
<h3 class="text-xl font-semibold text-black">
  Su ingrediente: 
  <span class="text-orange-500 font-bold"><?php echo $nombreingre; ?></span>
</h3>
<h3 class="text-xl font-semibold text-black">
  Cantidad: 
  <span class="text-orange-500 font-bold"><?php echo $cantidadingre; ?></span>
</h3>
</div>
</body>
</html>



