<?php
session_start();

@include "./controller.php";

// register user in DDBB
function createAccountInDDBB($username, $email, $password) {
    $respuesta_register = "
    <head>
    <link rel='stylesheet' href='../../../src/css/main.css'>
    </head>
    </html>
    <p>Inicie sesion para acceder a su <a href='../../login_page.php'>cuenta</a><p>
    ";
    $already_exist_error = "
    <head>
    <link rel='stylesheet' href='../../../src/css/main.css'>
    </head>
    <p>Esta cuenta ya existe, intente iniciar sessión <a href='../../login_page.php'>cuenta</a><p>
    ";
    
    if(validateUserRegister($email)) {
        return $already_exist_error;
    } else {
        createUserDB($username, $email, $password);
        return $respuesta_register;
    }
}
// login user in BBDD
function loginAccount($username, $password) {
    if(validateUserLogin($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['valid'] = true;
        header("Location: ../../dashboard.php");
    } else {
        echo "
        <head>
            <link rel='stylesheet' href='../../../src/css/main.css'>
        </head>
        <p>La cuenta que intenta acceder no existe, <a href='../../login_page.php'>pruebe otra vez</a><p>
        ";
        session_destroy();
    }
}
function userNewTask($newtask) {
    if(InsertTask($newtask)) {
        header("Location: ../../dashboard.php");
    } else {
        echo "Error";
    }
}

// erase task
function eraseTask($task) {
    validateExistingTask($task);
}