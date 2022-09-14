<?php


    session_start();
    include_once('../../Models/User/User.Admin.php');

    $pseudo=$_SESSION["pseudo"];
    $userAdmin = new UserAdmin();

    $result = $userAdmin->Erase_User($pseudo);

    header("Location:../../../../RESEAU_SOCIAL");


?>