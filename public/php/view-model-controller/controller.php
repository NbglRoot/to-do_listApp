<?php

@include "./db.php";

// register
function validateUserRegister($email) {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $querySelectUser = "SELECT username, email FROM users WHERE email='".$email."'";
    $result = mysqli_query($conn, $querySelectUser);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($row["email"] = $email) {
                return true;
            } else {
                return false;
            }
        }  
    }
    $conn->close();
}

function createUserDB($username, $email, $password) {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $queryInsertUser = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password') ";
    $conn->query($queryInsertUser);
    $conn->close();
}

// login
function validateUserLogin($username, $password) {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $querySelectUser = "SELECT username, password FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $querySelectUser);
    if (mysqli_num_rows($result) > 0) {
            return true;
        }
        $conn->close();
}

// add new task into DDBB
function InsertTask($task) {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($conn->connect_error) {
        die("No se pudo crear una nueva tarea");
    }
    $currentUser = $_SESSION['username'];
    $sqlSelectCurrentUser = "SELECT user_id FROM users WHERE username='$currentUser'";
    $query = mysqli_query($conn, $sqlSelectCurrentUser);
    $res = mysqli_fetch_assoc($query);
    $userId = $res['user_id'];
    $sqlInsertTask = "INSERT INTO cards_todo (user_id, card_desc) VALUES ('$userId', '$task')";
    $conn->query($sqlInsertTask);
    $conn->close();
    return true;
}

// show all task from DDBB for the current user
function showTask($name) {
    $conn = mysqli_connect("localhost", "root", "", "todoapp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // user
    $sqlSelectCurrentUser = "SELECT user_id FROM users WHERE username='$name'";
    $query = mysqli_query($conn, $sqlSelectCurrentUser);
    $res = mysqli_fetch_assoc($query);
    $userId = $res['user_id'];
    
    // task
    $querySelectCards = "SELECT id, card_desc FROM cards_todo WHERE user_id='$userId'";
    $sql = mysqli_query($conn, $querySelectCards);

    // condition
    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '
                <div class="cards">
                    <form action="./php/view-model-controller/controller.php" method="post">
                        <textarea readonly style="display: none;" name="taskId">'.$row['id'].'</textarea>
                        <textarea readonly style="resize: none; overflow-y: scroll; border: none;">'.$row['card_desc'].'</textarea>
                        <button type="submit" class="btn">Eliminar Tarea</button>
                    </form>
                </div>
            ';
        }  
    }
}

// remove task from DDBB
if(isset($_POST['taskId'])) {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($conn->connect_error) {
        die("No se pudo crear una nueva tarea");
    }
    $card_id = $_POST['taskId'];
    $sqlDeleteTask = "DELETE FROM cards_todo WHERE id='$card_id'";
    mysqli_query($conn, $sqlDeleteTask);
    $conn->close();
    header("Location: ../../dashboardShowTasks.php");
}
