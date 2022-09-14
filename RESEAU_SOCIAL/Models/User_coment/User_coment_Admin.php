<?php


    include("../../Models/DatabaseConnexion.php");
    include_once('User_coment.class.php');


    class comentAdmin{
        
    public function addcoment(User_coment $coment){
        global $db;

        $addcoment=$db->prepare("INSERT INTO User_coment(id_publication,Auteur_coment,Auteur_picture,coment_content,heure,date)
        VALUES(:id_publi,:auteur,:picture,:content,:heure,:date)");

        $addcoment->execute(
            array(


                'id_publi'=>$coment->get_id_publication(),
                'auteur'=>$coment->get_Auteur_coment(),
                'picture'=>$coment->get_Auteur_picture(),
                'content'=>$coment->get_coment_content(),
                'heure'=>$coment->get_heure(),
                'date'=>$coment->get_date()

            )
        );

        
        $error=$addcoment->errorInfo();

        if(is_null($error[1]))
        {
            return true;

        }
        return false;

    }

}



?>