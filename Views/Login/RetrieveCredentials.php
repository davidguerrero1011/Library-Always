<?php
if (isset($_COOKIE['user'])) {
    $userCookie = $_COOKIE['user'];
}
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

    <!-- General Css Styles -->
    <link rel="stylesheet" type="text/css" href="../../Public/Assets/Css/retrieve.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Assets/Css/util.css">
</head>

<body>

    <div class="container text-center" id="retrieveCredentials">
        <h2 class="m-5 library-font font-weight-bold" id="titleCredentials"></h2>
    </div>

        <!-- Get my user -->
        <div id="getUser">
            <form method="post" action="../../loader.php">
                <div class="mb-3 col-10">
                    <div class="col-sm-8" style="margin-left: 30%;">
                        <div id="retrieveHelp" class="form-text font-josefine"></div>
                    </div>

                    <div class="col-sm-8" style="margin-left: 30%;">
                        <input type="text" class="form-control" id="retrieveCredentials" name="retrieveCred" aria-describedby="retrieveHelp">
                    </div>
                </div>
                <div class="col-sm-6" style="margin-left: 32%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="center">
                                    <button class="btn">
                                        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                        </svg>
                                        <span>Get it</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="center">
                                    <button class="btn" id="returnBack">
                                        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Update Password -->
        <div id="changePassword">
            <form method="post" action="../../loader.php">
                <div class="mb-3 col-sm-8" style="margin-left: 20%;">
                    <label for="recoverPassword" id="passInp" class="form-label font-josefine"></label>
                    <input type="email" class="form-control" name="emailSend" id="recoverPassword" require>
                </div>

                <div class="col-sm-8" style="margin-left: 43%;">
                    <div class="center">
                        <button class="btn font-josefine" id="sendEmail" disabled>
                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>Send Email</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="retrieveUserModal" tabindex="-1" aria-labelledby="retrieveUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #57b846;">
                    <h5 class="modal-title font-josefine" id="retrieveUserModalLabel"></h5>
                </div>
                <div class="modal-body" id="viewUser">
                    <p class="font-josefine"> Your user is <?= $userCookie ?> </p>
                </div>
                <div class="modal-footer" id="buttonSubmit">
                    <button type="button" class="btn btn-secondary font-josefine" id="closeButton" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Styles -->
    <script src="../../Public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../Public/vendor/bootstrap/js/popper.js"></script>
    <script src="../../Public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Public/vendor/select2/select2.min.js"></script>
    <script src="../../Public/vendor/daterangepicker/moment.min.js"></script>
    <script src="../../Public/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="../../Public/vendor/countdowntime/countdowntime.js"></script>

    <!-- Axios CDN unpkg -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- General JavaScript -->
    <script src="../../Public/Assets/JavaScripts/generalFunctions.js"></script>
    <script src="../../Public/Assets/JavaScripts/MainWords.js"></script>
    <script src="../../Public/Assets/JavaScripts/retrieveCredencials.js"></script>

    <script>
        <?php
        if (!$userCookie) { ?>
            $('#retrieveUserModal').modal('hidden');
        <?php
        } else { ?>
            $('#retrieveUserModal').modal('show');
            $('#retrieveUserModalLabel').text('User Credential');
        <?php
        }
        ?>
    </script>

</body>

</html>