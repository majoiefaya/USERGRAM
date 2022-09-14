


<?php
    session_start();
    include("../../Models/DatabaseConnexion.php");
    include_once('../../Models/User/User.Admin.php');
    
    $username=$_SESSION['pseudo'];
    $user_info=$db->prepare("SELECT * FROM users WHERE user_name=:pseudo");
    $user_info->execute(array(
        'pseudo'=>$username
        )
    );
    $user=$user_info->fetch();

    $new_username=$_POST["pseudo"];
    $user_id=$user["user_id"];
    $password=$_POST['psw'];
    $mail=$_POST['mail'];
    $sexe=$_POST['sx'];
    $age=$_POST['ag'];
    $tel=$_POST['phnb'];


    $user = new User();
    $user->setUserId($user_id);
    $user->setUsername($new_username);
    $user->setPassword($password);
    $user->set_email($mail);
    $user->setSexe($sexe);
    $user->set_Age($age);
    $user->setPhone_number($tel);

    $UserAdmin = new UserAdmin();
    
    $UserAdmin->UpdateUsers($user);

    header("Location:../../../RESEAU_SOCIAL/views/User/Pages/home.view.php");


?>