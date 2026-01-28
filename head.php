<?php 

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    include_once 'views/home.php';
}elseif(isset($_POST['username']) && isset($_POST['password'])){
  //echo "Validacion de login";

  $userForm = $_POST['username'];
  $passForm = $_POST['password'];

  if($user->userExists($userForm, $passForm)){
    echo "Usuario validado";
    //$userSession->setCurrentUser($userForm);
    //$user->setUser($userForm);

  }else{
    //echo "Nombre de usuario y/o password incorrecto";
    $errorLogin = "<h2>Nombre de usuario y/o password es incorrecto</h2>";
  }

}else{
  //echo "Login";
  include_once 'index.php';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hostal Lucerito</title>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid d-flex flex-wrap bg-black">
    <ul class="nav me-auto"></ul>
    <ul class="nav">
      <li class="nav-item">
        <a href="#" class="nav-link text-white px-2" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a>
        <!-- Modal Login -->
        <form action="" method="POST">
          <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginlabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">

                <?php 
                  if(isset($errorLogin)){
                    echo $errorLogin;
                  }
                ?>

                  <h1 class="modal-title fs-5" id="modalLoginLabel">Modal Titulo</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                  <!-- Form Body -->
                  <div class="mb-3">
                    <label for="InputUsuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="mb-3">
                    <label for="InputPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <!-- Form Body -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- -->
      </li>
      <div class="vr"></div>
      <li class="breadcrumb-item">
        <a href="#" class="nav-link text-white px-2">Sign up</a>
      </li>
    </ul>
  </div>
  <header class="d-flex flex-wrap justify-content-center py-3 bg-black sticky-top">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
      <img src="img/icon.png">
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link">About</a></li>
    </ul>
  </header>