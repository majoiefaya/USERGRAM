
<?php
     session_start();
     include("../../Models/DatabaseConnexion.php");
     $user_id=$_GET["user_id"];
     $_SESSION["user_id"]=$user_id;
     header("Location:../../../RESEAU_SOCIAL_ADMIN/views/Admin/Pages/Update_user.view.php");
?>