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
  </head>
  <body>
      <section
        class="options__sec">
        <form action="./php/view-model-controller/view.php" method="post">
        <label for="addTask">Introduce una nueva tarea: </label>
        <input
        required
        autocomplete="off"
        maxlength="250"
        type="text"
        name="addTask"
        size="35"
        placeholder="nueva tarea..."
        />
        <input class="btn" type="submit" value="Guardar Tarea" />
        </form>
        <a href="dashboardShowTasks.php" style="color: #FFF; width: max-content; margin: 0 auto;">
            <input type="button" value="Mostrar Tareas" class="btn waves-effect waves-light btnRegi" style="margin: 0 auto; display: block; text-align: center;">
        </input></a> 
    </section>
    <?php
      @include "./components/log_header.php";
      @include "./components/footer.php";
    ?>
  </body>
</html>
