<?php
    include("../../Models/DatabaseConnexion.php");
    include_once("Notifications.class.php");

    class NotifiAdmin{
        
        public function CreateNotifi(Notifications $notification){
            global $db;
            $createNotifi=$db->prepare("INSERT INTO notifications(user_name,user_picture,sujet,noti_content,status)VALUES(:pseudo,:picture,:sbjt,:content,:stat)");
            $createNotifi->execute(array(
                'pseudo'=>$notification->get_user_name(),
                'picture'=>$notification->get_user_picture(),
                'sbjt'=>$notification->get_sujet(),
                'content'=>$notification->get_noti_content(),
                'stat'=>$notification->get_statuts()
            )
        );
            
        }
    }


?>