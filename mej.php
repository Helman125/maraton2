<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registros</title>

    <!-- CSS -->
    <link href="css/misestilos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">


    <!-- JS -->
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>
<body class="bg" style="height=100%;">
    

<div style="margin: 1%;">
    <form class="" action="mej.php" method="post">
        <center>
            <table class='table table-bordered table-hover table-light'>
                <tr>   
                    <a href="index.php" class="btn btn-block btn-info" role="button">Inicio</a>
                    <br><br>
                <tr>
                <tr>
                    <td>Listar por:</td>
                <tr>

                
                <!-- ---------------------------------------------------------------------------------- -->
                <!-- En alguna parte debería ir este código, lo pongo acá porque no sé donde quieres ponerlo tú xD -->
                
                <tr>
                    <td> <input type="radio" name="condicion" value="1" /> Género </td>
                </tr>
                <tr>
                    <td> <input type="radio" name="condicion" value="2" /> Experiencia </td>
                </tr>
                <tr>
                    <td> <input type="radio" name="condicion" value="3" /> Listar todos </td>
                </tr><!-- ---------------------------------------------------------------------------- -->
                <!-- ----------------------------------------------------------------------------- -->

                <TR>
                    <td><button class="btn btn-lg btn-block btn-primary" value="Consultar" type="submit">Consultar</button> <br></td>
                </TR>
            </table>
        </center>
    </form>
</div>
<?php 

include("conexion.php");
$condicion = $_POST['condicion'];
switch($condicion) {
    case 1:

$sql = "SELECT * FROM people WHERE genero ='mujer'"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 

        //echo "<div style='margin: 1%;'>";
        echo "<div class='form-group' style='margin-top: 1%;'>"; //Nav and tables
        echo "<nav>";
        echo "<div class='nav nav-tabs nav-fill' id='nav-tab' role='tablist'>";
        echo "<a class='nav-item nav-link active' id='nav-women-tab' data-toggle='tab' href='#nav-women' role='tab' aria-controls='nav-women' aria-selected='true'>Mujeres</a>";
        echo "<a class='nav-item nav-link' id='nav-men-tab' data-toggle='tab' href='#nav-men' role='tab' aria-controls='nav-men' aria-selected='false'>Hombres</a>";
        echo "</div>";
        echo "</nav>";
        //echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for names..'>";

        echo "<div class='tab-content px-3 px-sm-0' id='nav-tabContent'>";
        echo "<div class='tab-pane fade show active' id='nav-women' role='tabpanel' aria-labelledby='nav-women-tab' style='overflow-y: scroll; height:600px;'>"; //Women section
        echo "<table class='table table-bordered table-hover table-light'>"; 
        //echo "<td colspan='5' style='text-align: center;'>Mujeres</td>";
        echo "<tr class='success'>";
        echo "<thead class='thead-dark'>";
        echo "<th>Id</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Apellidos</th>"; 
        echo "<th>Fecha Nacimiento</th>"; 
        echo "<th>Genero</th>"; 
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "</thead>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['nacimiento']."</td>";  
            echo "<td>".$row['genero']."</td>";  
            echo "<td>  <a href='modificar.php?no=".$row['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td> <a href='eliminar.php?no=".$row['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>";
        } 
        echo "</table>";
        echo "</div>"; //Close women section
        //echo "</div>";
         
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 


$sql = "SELECT * FROM people WHERE genero ='Hombre'"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) {
        echo "<div class='tab-pane fade' id='nav-men' role='tabpanel' aria-labelledby='nav-men-tab' style='overflow-y: scroll; height:600px;'>"; //Men section
        echo "<table id='myTable' class='table table-bordered table-hover table-light'>";
        echo "<tr>"; 
        echo "<thead class='thead-dark'>";
        echo "<th>Id</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Apellidos</th>"; 
        echo "<th>Fecha Nacimiento</th>"; 
        echo "<th>Genero</th>"; 
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "</thead>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['nacimiento']."</td>";  
            echo "<td>".$row['genero']."</td>";
            echo "<td>  <a href='modificar.php?no=".$row['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td> <a href='eliminar.php?no=".$row['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>"; 
        }
        echo "</div>"; //Close men section
        echo "</table>";
        echo "</div>"; //Close nav content
        echo "</div>"; //Close nav and tables
         
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
break;
    case 2: 
    $sql = "SELECT * FROM people WHERE experiencia ='VERDADERO'"; 
    if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 

        echo "<div class='form-group' style='margin-top: 1%;'>"; //Nav and tables
        echo "<nav>";
        echo "<div class='nav nav-tabs nav-fill' id='nav-tab' role='tablist'>";
        echo "<a class='nav-item nav-link active' id='nav-xp-tab' data-toggle='tab' href='#nav-xp' role='tab' aria-controls='nav-xp' aria-selected='true'>Con Experiencia</a>";
        echo "<a class='nav-item nav-link' id='nav-nxp-tab' data-toggle='tab' href='#nav-nxp' role='tab' aria-controls='nav-nxp' aria-selected='false'>Sin Experiencia</a>";
        echo "</div>";
        echo "</nav>";

        echo "<div class='tab-content px-3 px-sm-0' id='nav-tabContent'>";
        echo "<div class='tab-pane fade show active' id='nav-xp' role='tabpanel' aria-labelledby='nav-xp-tab' style='overflow-y: scroll; height:600px;'>"; //Exp section
        echo "<table class='table table-bordered table-hover table-light'>";
        echo "<tr>";
        echo "<thead class='thead-dark'>";
        echo "<th>Id</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Apellidos</th>"; 
        echo "<th>Fecha Nacimiento</th>"; 
        echo "<th>Genero</th>"; 
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "</thead>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['nacimiento']."</td>";  
            echo "<td>".$row['genero']."</td>";
            echo "<td>  <a href='modificar.php?no=".$row['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td> <a href='eliminar.php?no=".$row['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>"; 
        }
        //echo "</div>";
        echo "</table>";
        echo "</div>"; //Close exp section
         
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 


$sql = "SELECT * FROM people WHERE Experiencia ='FALSO'"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) {

        echo "<div class='tab-pane fade' id='nav-nxp' role='tabpanel' aria-labelledby='nav-nxp-tab' style='overflow-y: scroll; height:600px;'>"; //NXp section
        echo "<table class='table table-bordered table-hover table-light'>";
        echo "<tr>";
        echo "<thead class='thead-dark'>";
        echo "<th>Id</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Apellidos</th>"; 
        echo "<th>Fecha Nacimiento</th>"; 
        echo "<th>Genero</th>";
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "</thead>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['nacimiento']."</td>";  
            echo "<td>".$row['genero']."</td>";  
            echo "<td>  <a href='modificar.php?no=".$row['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td> <a href='eliminar.php?no=".$row['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>"; 
        } 
        echo "</div>"; //Close nxp section
        echo "</table>";
        echo "</div>"; //Close nav content
        echo "</div>"; //Close nav and tables
         
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
break;
    case 3:
include("conexion.php");
$sql = "SELECT * FROM people"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) {

        echo "<div style='margin-top: 1%;'>";
        echo "<input style='width: 100%; border: 1px solid #ddd; font-size: 16px; padding: 12px 20px 12px 40px;' type='text' id='myInput' onkeyup='myFunction()' placeholder='Ingresa Id'>";
        echo "<div style='overflow-y: auto; height:600px;'>"; //All section
        echo "<table id='myTable' class='table table-bordered table-hover table-light'>";
        echo "<tr>";
        echo "<thead class='thead-dark'>";
        echo "<th>Id</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Apellidos</th>"; 
        echo "<th>Fecha Nacimiento</th>"; 
        echo "<th>Genero</th>";
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "</thead>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['nacimiento']."</td>";  
            echo "<td>".$row['genero']."</td>";  
            echo "<td>  <a href='modificar.php?no=".$row['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td> <a href='eliminar.php?no=".$row['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>"; 
        }
        echo "</div>";
        echo "</table>"; 
        echo "</div>";
         
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
break;
}
?>

</body>
</html>