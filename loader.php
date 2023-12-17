<?php

session_start();

// require classes or controllers
require_once("./Settings/connection.php");
require_once("./Controllers/LoginController.php");
require "./vendor/autoload.php";

// Call or invoque methods
$dbConnection = Connection::connection();
$login = new LoginController();


if (isset($_POST["username"]) && isset($_POST["pass"])) {
    $login->validateCredentials($dbConnection, $_POST["username"], $_POST["pass"]);
} else if (isset($_POST["retrieveCred"])) {
    $responseUser = $login->retrieveUser($dbConnection, $_POST["retrieveCred"]);
} else if (isset($_POST["emailSend"])) {
    $login->retrievePassword($dbConnection, $_POST["emailSend"]);
} 