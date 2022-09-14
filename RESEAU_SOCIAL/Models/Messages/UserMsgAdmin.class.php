<?php

include("../../Models/DatabaseConnexion.php");
include_once("UserMsg.class.php");

    class UserMsgAdmin
    {
        public function send_message(UserMsg $message){
            global $db;
            $sendMsg=$db->prepare('INSERT INTO usermsg(sender_name,receiver_name,message,datemsg,heuremsg)
            VALUES(:sender,:receiver,:msg,:datemsg,:heure)');
            $sendMsg->execute(
                array(
                    'sender'=>$message->get_sender_name(),
                    'receiver'=>$message->get_receiver_name(),
                    'msg'=>$message->get_msg(),
                    'datemsg'=>$message->get_datemsg(),
                    'heure'=>$message->get_heur_msg(),
                )
            );
        }
    }





?>