<?php
session_start();

if(!isset($_POST["Name"]) || !isset($_POST["Surname"]) || !isset($_POST["Age"]))
{
    http_response_code(400);
    echo "Error";
    return;
}

if(!session_start())
{
    http_response_code(400);
    echo "Error";
    return;
}

 $_SESSION["Name"] = $_POST["Name"];
 $_SESSION["Surname"] = $_POST["Surname"];
 $_SESSION["Age"] = $_POST["Age"];

 echo "My name is {$_SESSION["Name"]} {$_SESSION["Surname"]}, I am {$_SESSION["Age"]} years old.";
