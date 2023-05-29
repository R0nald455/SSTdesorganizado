<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container-fluid" id="fondo">
      <main class="form-signin">
        <form action=" " method="POST" autocomplete="off">
          <h1 class="h3 mb-3 fw-normal text-light fs-2"><b>Inventarios</b></h1>
          <div class="form-floating">
            <input type="text" name="documento" class="form-control"  placeholder="No de documento" required>
            <label for="floatingInput">No de documento</label>
          </div>
          <div class="form-floating">
            <input type="text" name="login_usuario" class="form-control" placeholder="Usuario"   required>
            <label for="floatingInput">Usuario</label>
          </div>
          <div class="form-floating">
            <input type="password" name="login_clave" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Contraseña</label>
          </div>
            <input type="submit">
          </div>
		  <?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				require_once "./php/main.php";
				require_once "./php/iniciar_sesion.php";
			}
			?>
		</form>
      </main>
    </div>
  </body>
</html>




 
