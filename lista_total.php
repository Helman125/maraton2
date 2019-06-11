<?php
include("conexion.php");
$sql = "SELECT * FROM people"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Id</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Apellidos</th>"; 
        echo "<th>Fecha Nacimiento</th>"; 
        echo "<th>Genero</th>"; 
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['nacimiento']."</td>";  
            echo "<td>".$row['genero']."</td>";  
            echo "</tr>"; 
        } 
        echo "</table>"; 
         
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 
mysqli_close($conn); 