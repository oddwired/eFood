<?php
/*
 * inc header file containing html tags*/
include "app/header.php";

/*
 * Main body area for login code*/
if (isset($_POST["login"]))
{
    $username = $_POST['username']; //captures username input from the html form
    $password = $_POST['password']; //captures password input from the html form



    if ($username == "admin" && $password == "admin")
    {
        //start a session
        //initialize and declare the session
        //redirect the user to the home page
        session_start();
        $_SESSION["session_user"]=$username;
        header("location: default.php");
    }elseif ($username == "manager" && $password == "manager"){
        //start a session
        //initialize and declare the session
        //redirect the user to the home page
        session_start();
        $_SESSION["session_user"]=$username;
        header("location: default.php");
    }elseif ($username == "delivery" && $password == "delivery"){
        //start a session
        //initialize and declare the session
        //redirect the user to the home page
        session_start();
        $_SESSION["session_user"]=$username;
        header("location: default.php");
    }else {
        header("location: index.php");
    }
}

/*
 * inc footer containing closer tags*/
include "app/footer.php";