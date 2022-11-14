<?php
    $password = $_POST["password"];
    $password2 = $_POST["repeatPassword"];
    if($password == $password2){
        header("Location: signin.html");
        alert("Successfully resgiter");
    }
    else{
        header("Location: register.html");
    }
?>