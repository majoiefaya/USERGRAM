<?php
    session_start();
    include_once("../../Models/DatabaseConnexion.php");
    include_once('../../Models/Admin/admin.Admin.php');
        
        $username = $_POST["pseudo"];
        $password = $_POST["psw"];

        $UserAdmin = new adminAdmin();

        $result = $UserAdmin->adminLogin($username, $password);

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
            
            include_once('Dashboard.controller.php');
        }
        else{
            echo"Wrong Identifiers";
            header("Location:../../../RESEAU_SOCIAL_ADMIN/Views/Admin/Pages/Connexion.view.php");
        }
?>