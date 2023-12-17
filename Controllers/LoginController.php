<?php


class LoginController {
    
    
    public function validateCredentials($bd, $user, $password) {
        require_once("./Models/Login.php");
        $loginModel = new Login();
        $loginModel->validateValueCredentials($bd, $user, $password);
    }

    public function retrieveUser($bd, $identifier) {
        require_once("./Models/Login.php");
        $loginModel = new Login();
        $loginModel->retrieveCredentUser($bd, $identifier);
    }

    public function retrievePassword($bd, $email) {
        require_once("./Models/Login.php");
        $loginModel = new Login();
        $loginModel->retrieveCredentPassword($bd, $email);
    }
}