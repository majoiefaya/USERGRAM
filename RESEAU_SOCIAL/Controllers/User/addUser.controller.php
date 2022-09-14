<?php
    session_start();
   

        include_once("../../Models/User/User.Class.php");
        include_once("../../Models/User/User.Admin.php");
        include_once("../../Models/DatabaseConnexion.php");
    if (isset($_POST["subscription"])){
        $username=$_POST['pseudo'];
        $password=$_POST['psw'];
        $mail=$_POST['mail'];
        $sexe=$_POST['sx'];
        $age=$_POST['ag'];
        $tel=$_POST['phnb'];
        ////////////////////////////////////////////////////////////
        $picture=$_FILES['pic'];
        
        if(isset($_FILES['pic']) AND !empty($_FILES['pic']['name'])) {
        $tailleMax = 2097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['pic']['size'] <= $tailleMax) {
            $extensionUpload = strtolower(substr(strrchr($_FILES['pic']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)) {
                $chemin = "../../views/User/User_img_Profil/User_img_Profil".$_POST['pseudo'].".".$extensionUpload;
                $resultat = move_uploaded_file($_FILES['pic']['tmp_name'], $chemin);
                $picture="User_img_Profil".$_POST['pseudo'].".".$extensionUpload;
                
                }
            }
        }        
        ////////////////////////////////////////////////////////////////////////////////////
        $_SESSION['pseudo']= $username;
        $_SESSION['psw']=$password;
        $_SESSION['mail']=$mail;
        $_SESSION['sx']= $sexe;
        $_SESSION['ag']= $age;
        $_SESSION['phnb']=$tel;
        $_SESSION['picture']= $picture;

        
        $Table_Person=$db->query("SELECT *FROM users");
        $Each_Person=$Table_Person->fetch();
        
        if($Each_Person["user_name"]==$username || $Each_Person["user_Password"]==$password || $Each_Person["email"]==$mail){
            echo "L utilisateur existe deja";
            header("Location:../../views/User/Pages/Connexion.view.php");
            
            exit();
            
        }
        else{
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($password);
            $user->set_email($mail);
            $user->setSexe($sexe);
            $user->set_Age($age);
            $user->setPhone_number($tel);
            $user->setPicture($picture);

            $userAdmin = new UserAdmin();

            $result = $userAdmin->AddUsers($user);
            echo "enregistrement REUSSI";
            header("Location:../../views/User/Pages/Connexion.view.php");
            
            exit();
        }
    }
    else{
        header("Location:../../views/User/Pages/Connexion.view.php");
    }


?>