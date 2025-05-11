<?php
    include 'conexion2.php';
    // vamos a generar una consulta SQL

    $sql = "SELECT * FROM personas";

    $consulta = mysqli_query($connect, $sql);

    //1. forma traer los resultados en el arreglo
    /*echo "<table border=1>";
    echo "<tr>";
    echo "<td>Cedula</td>";
    echo "<td>Nombre</td>";
    echo "<td>Apellido</td>";
    echo "<td>Direccion</td>";
    echo "<td>Telefono</td>";
    echo "</tr>";*/
    /*while ($fila = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td>" . $fila["cedula"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["apellido"] . "</td>";
        echo "<td>" . $fila["direccion"] . "</td>";
        echo "<td>" . $fila["telefono"] . "</td>";
        echo "</tr>";
    }*/
    echo "</table>";
    // 2. otra forma de pintar los resultados. Combinando HTML y PHP
?>
    <table>
        <!--<tr>
            <td>Cedula</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Telefono</td>
        </tr>-->
        <?php
        /*while ($fila1 = mysqli_fetch_array($consulta)) {
            echo "<tr>";
            echo "<td>" . $fila1["cedula"] . "</td>";
            echo "<td>" . $fila1["nombre"] . "</td>";
            echo "<td>" . $fila1["apellido"] . "</td>";
            echo "<td>" . $fila1["direccion"] . "</td>";
            echo "<td>" . $fila1["telefono"] . "</td>";
            echo "</tr>";
        }*/
        ?>
    </table>

    <?php
    // 3. otra forma de pintar los resultados. Combinando HTML y PHP
    ?>
    <table>
        <tr>
            <td>Cedula</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Telefono</td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($consulta)) {
        ?>
            <tr>
                <td><?php echo $fila["cedula"]; ?></td>
                <td><?php echo $fila["nombre"]; ?></td>
                <td><?php echo $fila["apellido"]; ?></td>
                <td><?php echo $fila["direccion"]; ?></td>
                <td><?php echo $fila["telefono"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php