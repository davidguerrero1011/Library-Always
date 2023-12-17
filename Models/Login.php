<?php

// I included JWT Library
use Firebase\JWT\JWT;

class Login {


    /**
     * Validate if user is login or not
     *
     * This method is used to validate user credentials and
     * using jwt method create a token that is stored in sessions table
     *
     * @access public
     * @param object $bd database instance
     * @param string $user user string
     * @param string $password password string
     * @return Account
     */
    public function validateValueCredentials($bd, $user, $password) {
        
        //Prepare request to database for validate credentials
        $hashPass = password_hash($password, PASSWORD_BCRYPT);
        $query = "SELECT `id`, `name`, `last_name`, `user`, `number_document`, `address`, `email`, `number_phone`, `cellphone_number`, `password`, `status` FROM `users` WHERE `user` = :user";
        $prepare = $bd->prepare($query);
        $prepare->bindParam(':user', $user, PDO::PARAM_STR);

        $prepare->execute();
        $response = $prepare->fetch(PDO::FETCH_ASSOC);
        $rowCount = $prepare->rowCount();

        if ($rowCount > 0) {
            $_SESSION["sessionId"]        = session_id();
            $_SESSION["id"]               = $response["id"];
            $_SESSION["name"]             = $response["name"];
            $_SESSION["last_name"]        = $response["last_name"];
            $_SESSION["user"]             = $response["user"];
            $_SESSION["number_document"]  = $response["number_document"];
            $_SESSION["address"]          = $response["address"];
            $_SESSION["email"]            = $response["email"];
            $_SESSION["number_phone"]     = $response["email"];
            $_SESSION["number_phone"]     = $response["cellphone_number"];
            $_SESSION["password"]         = $response["password"];

            //validate password and store user in session super global array
            $password2 = $_SESSION["password"];
            if (password_verify($password, $password2)) {
                //Generate token with jwt method
                $secretKey = $this->generateSecretString();
                $issuerClaim = "library-always";
                $audienceClaim = "THE AUDIENCE";
                $issuedatClaim = time();
                $notbeforeClaim = $issuedatClaim + 10;
                $expireClaim = $notbeforeClaim + 60;

                $token = array(
                    "iss" => $issuerClaim,
                    "aud" => $audienceClaim,
                    "iat" => $issuedatClaim,
                    "nbf" => $notbeforeClaim,
                    "exp" => $expireClaim,
                    "data" => array(
                        "id"        => $_SESSION["id"],
                        "firstName" => $_SESSION["name"],
                        "lastName"  => $_SESSION["last_name"],
                        "email"     => $_SESSION["email"],
                    )
                );

                // //Store session user
                require_once("./Settings/connection.php");
                $db = Connection::connection();
                $this->saveSessionUser($db, 'sessions', $_SESSION["id"], $secretKey);

                http_response_code(200);
                $jwt = JWT::encode($token, $secretKey, 'HS256');
                echo json_encode(
                    array(
                        "message"  => "Successful Lógin",
                        "jwt"      => $jwt,
                        "email"    => $_SESSION["email"],
                        "expireAt" => $expireClaim
                    )
                );

                return header('location:../Views/layout/app.php');
            } else {
                //catch error
                session_destroy();
                http_response_code(401);
                echo json_encode(array("message" => "Login Failed", "password" => $response["password"]));
                header('location:../index.php');
            }
        }
    }

    private function generateSecretString()
    {
        $permitedChars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        return substr(str_shuffle($permitedChars), 0, 10);
    }

    private function saveSessionUser($bd, $table, $userId, $token)
    {
        $sql = "INSERT INTO $table SET `user_id` = :userId, `token` = :token, `created_at` = :dateCurrent, `updated_at` = :dateCurrent";
        $query = $bd->prepare($sql);

        $query->bindParam(':userId', $userId);
        $query->bindParam(':token', $token);
        $query->bindParam(':dateCurrent', date('Y-m-d H:i:s'));
        if ($query->execute()) {
            return http_response_code(200);
        } else {
            return http_response_code(400);
        }
    }


    public function retrieveCredentUser($bd, $identifier) {

        //Prepare request to retrieve credentials
        $query = "SELECT `user` FROM `users` WHERE `number_document` = :identifier LIMIT 1";
        
        $prepare = $bd->prepare($query);
        $prepare->bindParam(':identifier', $identifier, PDO::PARAM_STR);

        $prepare->execute();
        $response = $prepare->fetch(PDO::FETCH_ASSOC);
        setcookie('user' ,$response["user"], time() + 60);
        
        header('location:../Views/Login/RetrieveCredentials.php');
        
    }


    public function retrieveCredentPassword($bd, $email) {

        require_once("../Services/sendEmail.php");
        $mail = new sendEmail();
        $response = $mail->sendEmailsHelper('Change Password', $email, '', '', 'Change your password');
        var_dump($response);

    }
}
