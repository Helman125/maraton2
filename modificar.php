
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Maratón</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src="js/main.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/misestilos.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/cover.css" rel="stylesheet">
</head>

  <body class="text-center bg">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Media Maratón Neiva</h3>
          <p class="lead">
        </p>
        </div>
      </header>
      <?php
	include "conexion.php";
    $id= $_GET['no'];
    $sql = "SELECT * FROM people WHERE id ='$id'";     
        
?>
<form action="modificar2.php" method="POST" style="text-align: left; display:block;">
    <input type="hidden" name="id" value="<?php echo $_GET['no']?> ">
            <div class="cuadroFrm" style="background-color:gainsboro;">
                      <div class="container">
                          <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" required name="nombre"  placeholder="Nombre"/>
                          <br>
                      </div>

                      <div class="container">
                          <label for="nombre">Apellidos:</label>
                            <input type="text" class="form-control" required name="apellido" placeholder="Apellido"/>
                          <br>
                      </div>

                      <div class="container">
                          <label for="nombre">Correo electronico:</label>
                            <input type="text" class="form-control" required name="email" placeholder="email" required/>
                          <br>
                      </div>

                      <div class="container">
                          <label for="nombre">Fecha de nacimiento:</label>
                            <input type="date" name="cumpleanios" step="1" required>
                          <br>
                      </div>

                      <div class="container">
                          <label for="nombre">¿Tiene usted experiencia en maratones?:</label>
                            <select name="experiencia">

                    <option value="Si">Si</option >

                    <option value="No">No</option >
                  </select>

                          <br>
                      </div>

                      <div class="container">
                          <label for="nombre">Género:</label><br>
                            <select name="genero">

                    <option value="Hombre">Hombre</option>

                    <option value="Mujer">Mujer</option>

                    </select>
                          <br> <br>
                      </div>

            
            <button class="btn btn-lg btn-block btn-primary" value="Aceptar" type="submit">Modificar</button> <br>
          </div>
          </form>
