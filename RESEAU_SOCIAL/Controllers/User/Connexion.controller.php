<?php
    session_start();
    include_once('../../Models/User/User.Admin.php');
        
        $username = $_POST["pseudo"];
        $password = $_POST["psw"];

        $UserAdmin = new UserAdmin();

        $result = $UserAdmin->UserLogin($username, $password);

        if($result != null){

            $auth = true;
            $_SESSION['auth'] = true;
            $_SESSION['pseudo']= $username;
            $_SESSION['psw']= $result['user_Password'];
            $_SESSION['mail']= $result['email'];
            $_SESSION['sx']= $result['sexe'];
            $_SESSION['ag']= $result['Age'];
            $_SESSION['phnb']= $result['phone_number'];
            $_SESSION['pic']= $result['user_picture'];

            setcookie("pseudo",$username,time()+7*24*3600,"/");
            
            include_once('home.controller.php');
        }
        else{
            echo"Wrong Identifiers";
        }
?>