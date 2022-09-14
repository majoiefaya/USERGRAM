
<?php
    session_start();
    include("../../Models/DatabaseConnexion.php");
    include_once('../../Models/Admin/admin.Admin.php');
    include_once('../../Models/User/User.Admin.php');
    $user_id=$_SESSION["user_id"];
    $user_info=$db->prepare("SELECT * FROM users WHERE user_id=:id");
    $user_info->execute(array(
        'id'=>$user_id
        )
    );
    $user=$user_info->fetch();

    $username=$_POST["pseudo"];
    $password=$_POST['psw'];
    $mail=$_POST['mail'];
    $sexe=$_POST['sx'];
    $age=$_POST['ag'];
    $tel=$_POST['phnb'];


    $user = new User();
    $user->setUserId($user_id);
    $user->setUsername($username);
    $user->setPassword($password);
    $user->set_email($mail);
    $user->setSexe($sexe);
    $user->set_Age($age);
    $user->setPhone_number($tel);

    $UserAdmin = new UserAdmin();
    
    $UserAdmin->UpdateUsers($user);

    header("Location:../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/Dashboard.controller.php")



?>