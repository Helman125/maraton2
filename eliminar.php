<?php
	include "conexion.php";

    $id= $_GET['no'];
        $query="Delete From people Where id='$id'";
        if ($conn->query($query) === TRUE) {
            header("Location: eliminado.php");
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        ?>
		