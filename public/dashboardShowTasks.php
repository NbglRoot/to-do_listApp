<?php
  session_start();
  if(!isset($_SESSION['valid'])) {
    header("Location: ../index.php");
    session_destroy();
    die();
  }
  if(isset($_GET['logout'])) {
    header("Location: ../index.php");
    session_destroy();
    die();
  }
?>

<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To-Do APP</title>
    <!-- main css index.html -->
    <link rel="stylesheet" href="../src/css/cards.css" />

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
  </head>
  <body>
    <a class="create_link" href="./dashboard.php">Crear tarea</a>
    <section class="task-list animate__animated animate__fadeIn">
    <?php
      @include "./php/view-model-controller/controller.php";
      showTask($name = $_SESSION['username'])
    ?>
    </section>
      
    <?php
      @include "./components/log_header.php";
    ?>
  </body>
</html>
