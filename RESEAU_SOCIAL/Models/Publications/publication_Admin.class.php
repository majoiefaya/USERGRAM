            
<?php

    include("../../Models/DatabaseConnexion.php");
    include_once('User_Publications.Class.php');

    class Publi_Admin{

            public function add_image_Publication(User_publications $publication){
            global $db;

            $add_img_Publi=$db->prepare("INSERT INTO publications(Auteur_publication,image_publication,user_picture,date,heure)
            VALUES(:Auteur_publi,:image_publi,:auteur_picture,:date,:heure)");

            $add_img_Publi->execute
            (
                array
                (
                    'Auteur_publi'=>$publication->get_Auteur_publication(),
                    'image_publi'=>$publication->get_image_publication(),
                    'auteur_picture'=>$publication->get_Auteur_picture(),
                    'date'=>$publication->get_date(),
                    'heure'=>$publication->get_heure()
                )
            );
            
            $error=$add_img_Publi->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;

        }


            public function add_video_Publication(User_publications $publication){
            global $db;

            $add_video_Publi=$db->prepare("INSERT INTO publications(Auteur_publication,video_publication,user_picture,date,heure)
            VALUES(:Auteur_publi,:video_publi,:auteur_picture,:date,:heure)");

            $add_video_Publi->execute
            (
                array
                (
                    'Auteur_publi'=>$publication->get_Auteur_publication(),
                    'video_publi'=>$publication->get_video_publication(),
                    'auteur_picture'=>$publication->get_Auteur_picture(),
                    'date'=>$publication->get_date(),
                    'heure'=>$publication->get_heure()
                )
            );
            
            $error=$add_video_Publi->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;

        }


        public function add_music_Publication(User_publications $publication){
            global $db;

            $add_music_Publi=$db->prepare("INSERT INTO publications(Auteur_publication,music_publication,user_picture,date,heure)
            VALUES(:Auteur_publi,:music_publi,:auteur_picture,:date,:heure)");

            $add_music_Publi->execute
            (
                array
                (
                    'Auteur_publi'=>$publication->get_Auteur_publication(),
                    'music_publi'=>$publication->get_music_publication(),
                    'auteur_picture'=>$publication->get_Auteur_picture(),
                    'date'=>$publication->get_date(),
                    'heure'=>$publication->get_heure()
                )
            );
            
            $error=$add_music_Publi->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;

        }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_file_Publication(User_publications $publication){
        global $db;

        $add_file_Publi=$db->prepare("INSERT INTO publications(Auteur_publication,file_publication,user_picture,date,heure)
        VALUES(:Auteur_publi,:file_publi,:auteur_picture,:date,:heure)");

        $add_file_Publi->execute
        (
            array
            (
                'Auteur_publi'=>$publication->get_Auteur_publication(),
                'file_publi'=>$publication->get_file_publication(),
                'auteur_picture'=>$publication->get_Auteur_picture(),
                'date'=>$publication->get_date(),
                'heure'=>$publication->get_heure()
            )
        );
        
        $error=$add_file_Publi->errorInfo();

        if(is_null($error[1]))
        {
            return true;

        }
        return false;

    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_text_Publication(User_publications $publication){
        global $db;

        $add_text_Publi=$db->prepare("INSERT INTO publications(Auteur_publication,text_publication,user_picture,date,heure)
        VALUES(:Auteur_publi,:text_publi,:auteur_picture,:date,:heure)");

        $add_text_Publi->execute
        (
            array
            (
                'Auteur_publi'=>$publication->get_Auteur_publication(),
                'text_publi'=>$publication->get_text_publication(),
                'auteur_picture'=>$publication->get_Auteur_picture(),
                'date'=>$publication->get_date(),
                'heure'=>$publication->get_heure()
            )
        );
        
        $error=$add_text_Publi->errorInfo();

        if(is_null($error[1]))
        {
            return true;

        }
        return false;

    }
}//eND OF CLASS publi_admin
?>