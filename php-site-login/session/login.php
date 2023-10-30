

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type=text/css rel="stylesheet" href="assets/index_estilos.css" />
    <link type=text/css rel="stylesheet" href="assets/bootstrap.min.css" />
  </head>
  <body>
     <br>
     <div class="container col-sm-3 position-absolute top-50 start-50 translate-middle">
	<div class="row">
      <div class="col py-5 mb">
      <form class="form-horizontal" action="session/sesion.php" method="post">
 <h1 class="fw-bold text-center py-3 mb">¡Login!</h1>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="user" placeholder="Ingrese su usuario" required="required" autofocus>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasenia" name="pass" placeholder="Ingrese su contraseña" required="required" autofocus>
          </div>
          <div class="d-grid gap-2 py-3 mb">
            <button class="btn btn-primary" type="submit" name="btn_ingresar">Iniciar sesion</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>