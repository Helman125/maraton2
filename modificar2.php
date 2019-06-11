<?php
	include "conexion.php";
    $id= $_POST['id'];
	$nombre= $_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$cumpleanios=$_POST['cumpleanios'];
	$experiencia=$_POST['experiencia'];
    $genero= $_POST['genero'];

    $query = "UPDATE `people` SET `nombre` = '$nombre' , `apellido` = '$apellido', `email` = '$email', `genero` = '$genero',`nacimiento` = '$cumpleanios', `experiencia` = '$experiencia' WHERE `id` = $id;";
    
    if ($conn->query($query) === TRUE) {
        header("Location: modificado.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    ?>