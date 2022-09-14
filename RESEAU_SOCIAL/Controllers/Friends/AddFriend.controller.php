    <?php
    session_start();
    include_once("../../../RESEAU_SOCIAL/Models/Friends/Friends.admin.php");
    /////////////////////////////
    $user_id=$_GET["user_id"];
    $friend_id=$_GET["friend_id"];
    /////////////////////////////user_info recuperation
    $Get_user=$db->prepare("SELECT * FROM users WHERE user_id=:id");

    $Get_user->execute(array
    (
        'id'=>$user_id
    )
    );

    $infos_user=$Get_user->fetch();
    /////////////////////////////////////

     /////////////////////////////friend_info recuperation
     $Get_friend=$db->prepare("SELECT * FROM users WHERE user_id=:id");

     $Get_friend->execute(array
     (
         'id'=>$friend_id
     )
     );
 
     $infos_friend=$Get_friend->fetch();
     /////////////////////////////////////
     $user_id=$infos_user["user_id"];
     $friend_id=$infos_friend["user_id"];
     $user_name=$infos_user["user_name"];
     $user_picture=$infos_user["user_picture"];
     $friend_name=$infos_friend["user_name"];
     $friend_pass=$infos_friend["user_Password"];
     $friend_sx=$infos_friend["sexe"];
     $friend_number=$infos_friend["phone_number"];
     $friend_Age=$infos_friend["Age"];
     $friend_mail=$infos_friend["email"];
     $friend_pic=$infos_friend["user_picture"];     

     $Allfriend=$db->query("SELECT friend_id FROM friends WHERE user_id=$user_id AND friend_id=$friend_id");
    
     $friend=$Allfriend->fetch();
    
     if(!empty($friend)){
        foreach($friend as $id){
            if($id==$friend_id){
                echo '<span style="color:red">'."deja amis".'</span>';
            }
            else{
                $friend=new Friends();

                $friend->setUserId($user_id);
                $friend->set_Friend_Id($friend_id);
                $friend->setUsername($user_name);
                $friend->set_user_picture( $user_picture);
                $friend->set_friend_name($friend_name);
                $friend->set_friend_Password($friend_pass);
                $friend->set_friend_sexe($friend_sx);
                $friend->set_friend_Phone_number($friend_number);
                $friend->set_friend_Age($friend_Age);
                $friend->set_friend_email($friend_mail);
                $friend->set_friend_picture($friend_pic);
                $friend_admin=new FriendsAdmin();
                $friend_admin->AddFriends($friend);        
            }
        }
     }else{
        $friend=new Friends();
        
        $friend->setUserId($user_id);
        $friend->set_Friend_Id($friend_id);
        $friend->setUsername($user_name);
        $friend->set_user_picture( $user_picture);
        $friend->set_friend_name($friend_name);
        $friend->set_friend_Password($friend_pass);
        $friend->set_friend_sexe($friend_sx);
        $friend->set_friend_Phone_number($friend_number);
        $friend->set_friend_Age($friend_Age);
        $friend->set_friend_email($friend_mail);
        $friend->set_friend_picture($friend_pic);
        
        $friend_admin=new FriendsAdmin();
        $friend_admin->AddFriends($friend);   
        echo '<span style="color:red">'."Ami ajoute".'</span>';   
    }
    
    header("Location:../../../RESEAU_SOCIAL/views/User/Pages/friends_action.view.php");
    ?>
    