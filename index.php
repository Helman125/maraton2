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
          <form action="mej.php">
              <input type="submit" class="btn btn-info btn-lg" value="Registros" />
          </form>
          <!--<a href="mej.php" onclick="toggle_visibility('form');" class="btn btn-lg btn-secondary active">Registros</a>-->
        </p>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Inscríbete y participa en esta gran carrera!</h1>
        <p class="lead">Inscríbete para participar por espectaculares premios que se repartirán a lo largo de esta gran aventura.</p>
        <p class="lead">
        <!--<form action="formulario.php">
            <input type="submit" class="btn btn-info btn-lg" value="Inscríbete!" />
        </form>-->
          <!--<a href="formulario.php" data-toggle="modal" data-target="#myModal" onclick="toggle_visibility('form');" class="btn btn-lg btn-secondary active">Inscríbete!</a>-->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Inscríbete!</button>
        </p>
      </main>

    

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Todos los derechos reservados</a>.</p>
        </div>
      </footer>
    </div>


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Inscripción</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="form-group" id="form">
          <form action="guardar.php" method="POST" style="text-align: left; display:block;">
            <div class="cuadroFrm" style="background-color:gainsboro;">
                      <div class="container">
                          <label for="nombre">Identificación:</label>
                          <input type="text" class="form-control" required name="id" placeholder="Identificación"/>
                          <br>
                      </div>
                      <div class="container">
                          <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" required name="nombre" placeholder="Nombre"/>
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

            
            <button class="btn btn-lg btn-block btn-primary" value="Aceptar" type="submit">Inscribir</button> <br>
          </div>
          </form>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
  </body>
</html>