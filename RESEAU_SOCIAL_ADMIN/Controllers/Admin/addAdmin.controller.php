<?php
    session_start();
   

        include_once("../../Models/Admin/admin.Class.php");
        include_once("../../Models/Admin/admin.Admin.php");
        include_once("../../Models/DatabaseConnexion.php");
    if (isset($_POST["subscription"])){
        $admin_name=$_POST['pseudo'];
        $password=$_POST['psw'];
        $mail=$_POST['mail'];
        $sexe=$_POST['sx'];
        $age=$_POST['ag'];
        $tel=$_POST['phnb'];
        ////////////////////////////////////////////////////////////
        $picture=$_FILES['pic'];
        
        if(isset($_FILES['pic']) AND !empty($_FILES['pic']['name'])) {
        $tailleMax = 500000;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['pic']['size'] <= $tailleMax) {
            $extensionUpload = strtolower(substr(strrchr($_FILES['pic']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)) {
                $chemin = "../../views/Admin/Admin_profil_picture/Admin_Profil".$admin_name.".".$extensionUpload;
                $resultat = move_uploaded_file($_FILES['pic']['tmp_name'], $chemin);
                $image="Admin_Profil".$admin_name.".".$extensionUpload;
                
                }
            }
        }        
        ////////////////////////////////////////////////////////////////////////////////////
        $_SESSION['pseudo']= $admin_name;
        $_SESSION['psw']=$password;
        $_SESSION['mail']=$mail;
        $_SESSION['sx']= $sexe;
        $_SESSION['ag']= $age;
        $_SESSION['phnb']=$tel;
        $_SESSION['picture']= $picture;

        
        $Table_Person=$db->query("SELECT *FROM admin");
        $Each_Person=$Table_Person->fetch();
        
        if($Each_Person["admin_name"]==$admin_name || $Each_Person["admin_Password"]==$password || $Each_Person["email"]==$mail){
            echo "L utilisateur existe deja";
            
            
            exit();
            
        }
        else{
            $admin = new admin();
            $admin->setadminname($admin_name);
            $admin->setPassword($password);
            $admin->set_email($mail);
            $admin->setSexe($sexe);
            $admin->set_Age($age);
            $admin->setPhone_number($tel);
            $admin->setPicture($picture);

            $adminAdmin = new adminAdmin();

            $result = $adminAdmin->Add_admin($admin);
            echo "enregistrement REUSSI";
            
            
            exit();
        }
    }
    else{
        
    }


?>