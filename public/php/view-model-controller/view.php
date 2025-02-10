<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="../../../src/css/main.css">
    <link rel="stylesheet" href="../../../src/css/normalize.css">
    
</head>
<body>
    <?php @include "../../components/footer.php" ?>
</body>


<?php

@include "./model.php";

// register new user
if (isset($_POST['register_username']) && isset($_POST['register_email']) && isset($_POST['register_password'])) {
    $rUsername = $_POST['register_username'];
    $rEmail = $_POST['register_email'];
    $rPassword = $_POST['register_password'];

    echo createAccountInDDBB($rUsername, strtolower($rEmail), $rPassword);
}
// login
if (isset($_GET['login_username']) && isset($_GET['login_password'])) {
    $rUsername = $_GET['login_username'];
    $rPassword = $_GET['login_password'];

    loginAccount($rUsername, $rPassword);
}

// new tasks
if(isset($_POST['addTask'])) {
    $newTask = $_POST['addTask'];
    userNewTask($newTask);
}

// erase tasks
if(isset($_GET['eraseTask']) && isset($_GET['task'])) {
    $currentTask = $_GET['task'];
    eraseTask($currentTask); 
}
?>

