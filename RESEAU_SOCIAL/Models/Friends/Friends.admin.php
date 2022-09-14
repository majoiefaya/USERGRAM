<?php

    include("Friends.class.php");
    include("../../Models/DatabaseConnexion.php");


    class FriendsAdmin
    {
        public function AddFriends(Friends $friend)
         {
             global $db;
             $addfriend=$db->prepare("INSERT INTO friends(user_id,friend_id,user_name,user_picture,friend_name,friend_Password,friend_sexe,friend_phone_number,friend_Age,friend_email,friend_user_picture)
             VALUES(:user_id,:friend_id,:user_nm,:user_pic,:friend_nm,:friend_Pass,:friend_sx,:friend_nb,:friend_Age,:friend_mail,:friend_pic)");
             $addfriend->execute(
                 array(
                    'user_id'=>$friend->getUserId(),
                    'friend_id'=>$friend->get_Friend_Id(),
                    'user_nm'=>$friend->getUsername(),
                    'user_pic'=>$friend->get_user_picture(),
                    'friend_nm'=>$friend->get_friend_name(),
                    'friend_Pass'=>$friend->get_friend_Password(),
                    'friend_sx'=>$friend->get_friend_sexe(),
                    'friend_nb'=>$friend->get_friend_Phone_number(),
                    'friend_Age'=>$friend->get_friend_Age(),
                    'friend_mail'=>$friend->get_friend_email(),
                    'friend_pic'=>$friend->get_friend_picture()

                 )
             );
         }//END OF FUNCTION
    }





































?>