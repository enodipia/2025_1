<?php
include 'connect.php';

$sql = "SELECT * FROM ingredientes";
$consulta = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Ingredientes</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
<div class="bg-orange-500 w-full size-10 content-center">
<h1 class="ml-1 text-white font-bold text-2xl text-center">
LISTA INGREDIENTES
</h1>   
<img src="IMG/logo_final.png" alt="Descripción" class="absolute top-0 right-0 w-10 h-8 m-1.5 ">
</div>
<div class="bg-gray-200 border-orange-600 border-b-4 border-r-4 my-3 pb-3 flex flex-col items-center max-w-md mx-auto">
<h3 class="text-2xl font-semibold mb-4 text-center">Lista de Ingredientes Guardados</h3>   
<table>
<thead class="bg-orange-300 text-black">
<tr>
<th class="px-4 py-2 border">ID</th>
<th class="px-4 py-2 border">Nombre</th>
<th class="px-4 py-2 border">Cantidad</th>
</tr>
</thead>
<?php while ($fila = mysqli_fetch_array($consulta)): ?>
<tr class="hover:bg-gray-100 bg-white">
<td class="px-4 py-2 border"><?php echo $fila['id']; ?></td>
<td class="px-4 py-2 border"><?php echo $fila['nombre']; ?></td>
<td class="px-4 py-2 border"><?php echo $fila['cantidad']; ?></td>
 </tr>
 <?php endwhile; ?>
</table>
</div>
</div>
</div>
</body>
</html>
