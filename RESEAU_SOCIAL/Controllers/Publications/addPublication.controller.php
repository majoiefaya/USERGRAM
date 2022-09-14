<?php
session_start();
 include_once("../../Models/Publications/publication_Admin.class.php");


    $publication=new User_publications();
    $auteur=$_SESSION['pseudo'];

    $user_info=$db->prepare("SELECT * FROM users WHERE user_name=:pseudo");
    $user_info->execute(array(
        'pseudo'=>$auteur
        )
    );
    $user=$user_info->fetch();
    $user_picture=$user["user_picture"];
    $date_publi=strftime("%A %d %B %Y");
    $heure_publi=strftime("%X");



print_r( $_FILES["video"]);

    $image=$_FILES['img'];

    if(isset($_FILES['img']) AND !empty($_FILES['img']['name'])) {
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png','jfif','webp','pdf','mp4','py');
    if($_FILES['img']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides)) {
            $chemin = "../../views/User/User_Publication/Images/User_Publication".$auteur.".".$extensionUpload;
            $resultat = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);
            $image="User_Publication".$auteur.".".$extensionUpload;

            $publication->set_date($date_publi);
            $publication->set_heure($heure_publi);
            $publication->set_Auteur_publication($auteur);
            $publication->set_Auteur_picture($user_picture);
            $publication->set_image_publication($image);
        
            $publi_admin=new Publi_Admin();
            
            $publi_admin->add_image_Publication($publication);
            header("Location:../../views/User/Pages/home.view.php");
       
            }
            else{
                echo'extensions invalides';
            }
        }else{
            echo'Nom du fichier introuvable';
        }
    }
    else{
        echo'Publication vide';
    }
//video///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $file_name = $_FILES['video']['name'];
    if(isset($_FILES['video']) AND !empty($file_name)){
        
        $file_temp = $_FILES['video']['tmp_name'];
        $file_size = $_FILES['video']['size'];

        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
            if(in_array($end, $allowed_ext)){
                $video ="User_Publication".$auteur.".".$end;
                $location = '../../views/User/User_Publication/videos/'.$video;
                if(move_uploaded_file($file_temp, $location)){
                    $publication->set_date($date_publi);
                    $publication->set_heure($heure_publi);
                    $publication->set_Auteur_publication($auteur);
                    $publication->set_Auteur_picture($user_picture);
                    $publication->set_video_publication($video);
                
                    $publi_admin=new Publi_Admin();
                    
                    $publi_admin->add_video_Publication($publication);
                    echo "<script>alert('Video Uploaded')</script>";
                    header("Location:../../views/User/Pages/home.view.php");
                }
            }else{
                echo "<script>alert('Wrong video format')</script>";
                header("Location:../../views/User/Pages/home.view.php");
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            header("Location:../../views/User/Pages/home.view.php");
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $music = $_FILES['music']['name'];
    if(isset($_FILES['music']) AND !empty($music)){
        
        $file_temp = $_FILES['music']['tmp_name'];
        $file_size = $_FILES['music']['size'];

        if($file_size < 50000000){
            $file = explode('.', $music);
            $end = end($file);
            $allowed_ext = array('mp3', 'mp4', 'm4a', 'Flac', 'WAV','WMA');
            if(in_array($end, $allowed_ext)){
                $music ="User_Publication".$auteur.".".$end;
                $location = '../../views/User/User_Publication/Musics/'.$music;
                if(move_uploaded_file($file_temp, $location)){
                    $publication->set_date($date_publi);
                    $publication->set_heure($heure_publi);
                    $publication->set_Auteur_publication($auteur);
                    $publication->set_Auteur_picture($user_picture);
                    $publication->set_music_publication($music);
                
                    $publi_admin=new Publi_Admin();
                    
                    $publi_admin->add_music_Publication($publication);
                    echo "<script>alert('music Uploaded')</script>";
                    header("Location:../../views/User/Pages/home.view.php");
                }
            }else{
                echo "<script>alert('Wrong music format')</script>";
                header("Location:../../views/User/Pages/home.view.php");
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            header("Location:../../views/User/Pages/home.view.php");
        }
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$file = $_FILES['file']['name'];
    if(isset($_FILES['file']) AND !empty($file)){
        
        $file_temp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];

        if($file_size < 50000000){
            $file = explode('.', $file);
            $end = end($file);
            $allowed_ext = array('py', 'doc', 'docx', 'xls', 'xlsx','pdf','txt');
            if(in_array($end, $allowed_ext)){
                $file ="User_Publication".$auteur.".".$end;
                $location = '../../views/User/User_Publication/Documents/'.$file;
                if(move_uploaded_file($file_temp, $location)){
                    $publication->set_date($date_publi);
                    $publication->set_heure($heure_publi);
                    $publication->set_Auteur_publication($auteur);
                    $publication->set_Auteur_picture($user_picture);
                    $publication->set_file_publication($file);
                
                    $publi_admin=new Publi_Admin();
                    
                    $publi_admin->add_file_Publication($publication);
                    echo "<script>alert('file Uploaded')</script>";
                    header("Location:../../views/User/Pages/home.view.php");
                }
            }else{
                echo "<script>alert('Wrong file format')</script>";
                header("Location:../../views/User/Pages/home.view.php");
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            header("Location:../../views/User/Pages/home.view.php");
        }
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////
    $text=$_POST["text"];
    echo $text;
    if(isset($text)AND !empty($text)){
        $publication->set_date($date_publi);
        $publication->set_heure($heure_publi);
        $publication->set_Auteur_publication($auteur);
        $publication->set_Auteur_picture($user_picture);
        $publication->set_text_publication($text);
    
        $publi_admin=new Publi_Admin();
        
        $publi_admin->add_text_Publication($publication);
        header("Location:../../views/User/Pages/home.view.php");
        
    }else{
        echo"Vous n avez rien ecrit";
        header("Location:../../views/User/Pages/home.view.php");
    }


?>