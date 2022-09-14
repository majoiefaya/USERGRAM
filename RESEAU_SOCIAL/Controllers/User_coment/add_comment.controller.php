<?php
session_start();
include_once("../../Models/User_coment/User_coment_Admin.php");

$coment=new User_coment();

$coment_content=$_POST["coment"];
$id_publication=$_GET["id_publi"];
$Auteur_coment=$_GET["auteur"];
$Auteur_picture=$_GET["picture"];
$date_coment=strftime("%A %d %B %Y");
$heure_coment=strftime("%X");

if (!empty($coment_content)){
    $coment->set_id_publication($id_publication);
    $coment->set_Auteur_coment($Auteur_coment);
    $coment->set_Auteur_picture($Auteur_picture);
    $coment->set_coment_content($coment_content);
    $coment->set_heure($heure_coment);
    $coment->set_date($date_coment);
    
    $coment_admin=new comentAdmin();
    
    $coment_admin->addcoment($coment);
    echo"commentaire bien posté";
    include_once('../../../RESEAU_SOCIAL/Controllers/User/home.controller.php');
}
else{
    "echo vous n avez poster aucun commentaire";
     include_once('../../../RESEAU_SOCIAL/Controllers/User/home.controller.php');
}




?>