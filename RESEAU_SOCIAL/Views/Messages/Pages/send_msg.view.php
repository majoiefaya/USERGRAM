
<?php

$friend_id=$_GET["friend_id"];
$user_id=$_GET["user_id"];

$Allfriends=$db->prepare("SELECT * FROM friends WHERE friend_id=:id_fr");
$Allfriends->execute(
    array(
        'id_fr'=>$friend_id
    )
);


$friends=$Allfriends->fetch();

$sender_name=$_SESSION["pseudo"];
$user_name
?>

<?php
              $select_user_msg=$db->prepare("SELECT * FROM usermsg WHERE sender_name=:sender AND receiver_name=:receiver");
              $select_user_msg->execute(
                  array(
                      'sender'=>$sender_name,
                      'receiver'=>$friends["friend_name"]
                      )
                  );
            ?>

            
            <?php
               $select_friend_msg=$db->prepare("SELECT * FROM usermsg WHERE sender_name=:receiver AND receiver_name=:sender");
               $select_friend_msg->execute(
                   array(
                       'receiver'=>$friends["friend_name"],
                       'sender'=>$sender_name
                       )
                   );
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <style>
    body{
        background-color:#273746;
    }

    form{
        background-color:whitesmoke;
        width:32%;
        max-height:50%;
        margin:auto;
        display:block;
        position:center;

    }

    .msg_body{
    display:flex;
    width:100%;
    height:50%;
    margin-top:4px
    }
      
    .send_msg{
        background-color:#3498DB;
        width: 100%;
        max-height:100%;
        overflow-y:scroll;
        border-radius:2.5px;
    }


    .send_msg .sender_msg{
        display:block;
        margin-top:5%;
        border-radius:4%;
        background-color:#6A6A6A;
        width:45%;
        height:5%;
        box-shadow:2px 10px 10px #34495E;
    }
    .send_msg .receiver_msg{
        display:block;
        margin-top:5%;
        border-radius:4%;
        background-color:#3498DB;
        width:45%;
        height:5%;
        margin-left:50%;
        box-shadow:2px 10px 10px #34495E;
    }

    .send_msg .sender_msg p{
        color:whitesmoke;
        letter-spacing: .2rem;
        font-family: helvetica;
        font-size:14px;
        margin-left:20px;
        margin-top:18px;
        max-width:100%;
        max-height:100%;
    }
    .send_msg .receiver_msg p{
        color:whitesmoke;
        letter-spacing: .2rem;
        font-family: helvetica;
        font-size:14px;
        margin-left:20px;
        margin-top:18px;
        max-width:100%;
        max-height:100%;
    }


    .send_msg::-webkit-scrollbar{
        width: 4px; 
        
    } 

    .Psend_msg::-webkit-scrollbar-track{
        background:gray;
    }

    .send_msg::-webkit-scrollbar-thumb{
        background-color:white;
        border-radius: 10px;
        border: 3px solid gray;
    }
    .user_info {
        width:100%;
        height:50%;
        background-color:#3498DB;
        display:flex;
    }
    .user_info img{
        max-width:20%;
        max-height:30%;
        border-radius:50%;
    }
    .user_info p{
        color:white;
        font-size:18px;
        font-family:helvetica;
        margin-left:60%;
    }
    #msg{
        width:60%;
        margin-left:5%;
    }
    .msg_enter{
        background-color:#3498DB;
        display:flex;
    }
</style>
</head>
<body>


    <form method="POST" action="../../../../RESEAU_SOCIAL/Controllers/Messages/add_message.controller.php?friend_id=<?=$friend_id?>&amp;user_id=<?=$user_id?>">
    <div class="user_info">
        <img src="../../../../RESEAU_SOCIAL/views/User/User_img_Profil/<?php echo $friends["friend_user_picture"];?>"/> 
        <p><?php echo $friends["friend_name"] ?></p>
    </div>

    <div class="msg_body">

        <div class="send_msg"> 
      
            <?php 
            while($sender_msg=$select_user_msg->fetch() AND $friend_msg=$select_friend_msg->fetch()){?>
 
                <div class="sender_msg">
                    <p><?php echo $sender_msg["sender_name"] ?></p>
                    <p><?php echo $sender_msg["message"] ?></p>
                </div>

                <div class="receiver_msg">
                    <p><?php echo $friend_msg["sender_name"] ?></p>
                    <p><?php echo $friend_msg["message"] ?></p>

                </div>
            
            <?php } ?>

        
        </div>
    
    </div>
    <div class="msg_enter">
        <a href=""></a>
        <a href=""></a>
        <textarea placeholder="message ici" name="msg" id="msg" rows="3"></textarea>
        <input type="submit">
    </div>
    </form>
  
</body>
</html>