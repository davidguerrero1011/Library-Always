<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title id="titleLogin"></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Css styles -->
    <link rel="icon" type="image/png" href="../../Public/Assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/daterangepicker/daterangepicker.css">

    <!-- General Css Styles -->
    <link rel="stylesheet" type="text/css" href="../../Public/Assets/Css/util.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Assets/Css/main.css">
</head>

<body>

    <h1>Layout</h1>
    <p> <?php var_dump($_SESSION["name"]); ?> </p>     


    <!-- JavaScript Styles -->
    <script src="../../Public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../Public/vendor/animsition/js/animsition.min.js"></script>
    <script src="../../Public/vendor/bootstrap/js/popper.js"></script>
    <script src="../../Public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Public/vendor/select2/select2.min.js"></script>
    <script src="../../Public/vendor/daterangepicker/moment.min.js"></script>
    <script src="../../Public/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="../../Public/vendor/countdowntime/countdowntime.js"></script>

    <!-- General JavaScript -->
    <script src="../../Public/Assets/JavaScripts/generalFunctions.js"></script>
    <script src="../../Public/Assets/JavaScripts/MainWords.js"></script>
    <script src="../../Public/Assets/JavaScripts/login.js"></script>

</body>

</html>