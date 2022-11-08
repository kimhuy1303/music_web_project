<?php 
    if(isset($_POST["btnGui"])){
        if(!empty($_POST["username"])){
            $username = $_POST["username"];
            echo "$username";
        }
        if(!empty($_POST["password"])){
            $password = $_POST["password"];
            echo "$password";
        }
    }
?>