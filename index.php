<!DOCTYPE html>
<html lang="en">

<head>
    <title id="titleLogin"></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Css styles -->
    <link rel="icon" type="image/png" href="./Public/Assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./Public/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./Public/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="./Public/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="./Public/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="./Public/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./Public/vendor/daterangepicker/daterangepicker.css">

    <!-- General Css Styles -->
    <link rel="stylesheet" type="text/css" href="./Public/Assets/Css/util.css">
    <link rel="stylesheet" type="text/css" href="./Public/Assets/Css/main.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="loader.php">
                    <span class="login100-form-title"></span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="username" placeholder="Username" pattern="[a-zA-Z0-9]+">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1" id="txt1"></span>
                        <a href="#" class="txt2" data-bs-toggle="modal"></a>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn"></button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9"></span>

                        <a href="#" class="txt3" id="txt3"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="generalModal" tabindex="-1" aria-labelledby="generalModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header primary-color">
                    <h5 class="modal-title m-l-200 text-white josefin-font" id="generalModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="my-4 library-font" id="modalBody"></p>
                    <div id="credentialsFirst">
                        <div class="form-check mx-4">
                            <input class="form-check-input josefin-font" type="radio" name="retrieveCredentials" id="userCredential">
                            <label class="form-check-label josefin-font text-black" for="userCredential">
                                Retrieve your user
                            </label>
                        </div>
                        <div class="form-check mx-4">
                            <input class="form-check-input josefin-font" type="radio" name="retrieveCredentials" id="passwordCredential" checked>
                            <label class="form-check-label josefin-font text-black" for="passwordCredential">
                                Update your password
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bgwhite bgprimaryhover josefin-font text-black" data-bs-dismiss="modal" id="closeButton">Close</button>
                    <button type="button" class="btn bgprimary bgwhitehover josefin-font" id="buttonSave">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Styles -->
    <script src="./Public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./Public/vendor/animsition/js/animsition.min.js"></script>
    <script src="./Public/vendor/bootstrap/js/popper.js"></script>
    <script src="./Public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./Public/vendor/select2/select2.min.js"></script>
    <script src="./Public/vendor/daterangepicker/moment.min.js"></script>
    <script src="./Public/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="./Public/vendor/countdowntime/countdowntime.js"></script>

    <!-- General JavaScript -->
    <script src="./Public/Assets/JavaScripts/generalFunctions.js"></script>
    <script src="./Public/Assets/JavaScripts/MainWords.js"></script>
    <script src="./Public/Assets/JavaScripts/login.js"></script>

</body>

</html>