<?php


    session_start();
    include_once('../../Models/Admin/admin.Admin.php');

    $user_id=$_GET["user_id"];
    echo $user_id;
    $admin_Admin = new adminAdmin();

    $result = $admin_Admin->Erase_User($user_id);

    header("Location:../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/Dashboard.controller.php");


?>