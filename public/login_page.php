<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do App</title>

  <!-- main css index.html -->
  <link rel="stylesheet" href="../src/css/main.css" />
  <link rel="stylesheet" href="../src/css/loginRegister.css">

  <!-- favicon -->
  <link
    rel="shortcut icon"
    href="media/img/favicon/logo.png"
    type="image/x-icon"
  />

  <!-- materialize and animate.css -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link
    type="text/css"
    rel="stylesheet"
    href="../src/css/materialize.min.css"
    media="screen,projection"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!-- scripts -->
  <script
    defer
    type="text/javascript"
    src="../src/js/materialize.min.js"
  ></script>
  <script defer src="../src/js/loginValidate.js"></script>  
</head>
<body>
  <section class="log_in animate__animated animate__fadeIn animate__faster">
      <form class="column login__form" action="./php/view-model-controller/view.php" method="get">  
        <div class="s12 m6 input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" name="login_username" id="first_name" type="text" size="30" maxlength="20">
          <label for="username">Nombre de usuario: </label>
          <p id="error_input_username"></p>
        </div>
        <div class="s12 m6 input-field">
          <i class="material-icons prefix">lock</i>
          <input id="password" name="login_password" id="password" type="password" class="validate" placeholder=" " maxlength="20">
          <label for="password">Contraseña: </label>
          <p id="error_input_password"></p>
        </div>
        <a href="register_page.php" style="color: #FFF;">
        <input type="button" value="Registrate" class="btn waves-effect waves-light btnRegi" style="margin-right: 1.5rem; text-align: center;">
        </input></a> 
        <button class="btn icon-right waves-effect waves-light submitBtn" disabled="true" type="submit">
          Iniciar Session<i class="material-icons right">send</i>
        </button>
      </form>
        <a href="../index.php" style="color: #FFF;">
          <input type="button" value="Volver al inicio" class="btn waves-effect waves-light btnRegi" style="margin-right: 1.5rem; text-align: center;">
        </input></a> 
</section>
    <?php @include "./components/footer.php"?>
</body>
</html>