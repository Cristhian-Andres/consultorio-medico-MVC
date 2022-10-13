<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />
  <!-- ===== ICONOS ==== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="views/assets/css/styleLogin.css" />
  <title>Vida Natural</title>
</head>

<body>

  <div class="login">
    <div class="text-center">
      <i class='fas fa-hospital-user fs-1 rounded-full  p-2'></i>
    </div>

    <form class="needs-validation" action="?c=login&a=guardarLogin" method="POST">

      <div class="form-group was-validated">
        <label class="form-label" for="email">Ingrese Usuario</label>
        <input class="form-control" type="text" name="Login" required>
      </div>

      <div class="form-group was-validated">
        <label class="form-label" for="password">Ingrese contraseña</label>
        <input class="form-control" type="password" name="Password" required>
      </div>

      <input class="btn bg-info w-100" type="submit" value="Ingresar" name="btnIngresar">
    </form>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>