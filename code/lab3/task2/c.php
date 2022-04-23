<?php
session_start();

if(!isset($_POST["Name"]) || !isset($_POST["Surname"]) || !isset($_POST["Salary"]) || !isset($_POST["Country"]))
{
    http_response_code(400);
    echo "Error";
    return;
}

$_SESSION["Name"] = $_POST["Name"];
$_SESSION["Surname"] = $_POST["Surname"];
$_SESSION["Salary"] = $_POST["Salary"];
$_SESSION["Country"] = $_POST["Country"];

$info = "";
$info .= "<ul>";
foreach($_SESSION as $key => $value)
    $info .= "<li>".  $key. ": ". $value ."</li>";
$info .= "</ul>";
echo $info;
