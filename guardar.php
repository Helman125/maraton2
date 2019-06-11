<?php 
include("conexion.php");
	$id= $_POST['id'];
	$nombre= $_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$cumpleanios=$_POST['cumpleanios'];
	$experiencia=$_POST['experiencia'];
	$genero= $_POST['genero'];

	echo $genero;

$query="INSERT INTO people(id,nombre,apellido,email,genero,nacimiento,experiencia) VALUES ('$id','$nombre','$apellido','$email','$genero','$cumpleanios','$experiencia')";
if ($conn->query($query) === TRUE) {
    header("Location: guardado.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
?>



