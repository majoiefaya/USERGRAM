<?php

$user_name=$_SESSION["pseudo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <script src="https://kit.fontawesome.com/ed789acac1.js" crossorigin="anonymous"></script>
    <style>
           
    .modal-all-friend {
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: gray;
        background-color: rgba(0,0,0,0.4);
    }

       
    .modal-all-friend-content {
        background-color:#fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        max-width: 45%;
        max-height:90%;
        box-shadow:2px 10px 10px #34495E;
        border-radius:7px;
        overflow-y:scroll;
    }


    .modal-all-friend-content .user_section_infos{
        display:flex;
        border-radius:5%;
        margin-top:5%;
        background-color:#F2F2F2 ;
        width:90%;
        height:10%;
    }

    .modal-all-friend-content .user_section_infos p{
        color:#273746;
        letter-spacing: .2rem;
        font-family: var(--dk-font);
        font-size:14px;
        width:80px;
        margin-left:20px;
        margin-top:18px;
    }
    .modal-all-friend-content .user_section_infos img{
        margin-top:3px;
        margin-left:5px;
        border-radius:10%;
        width:65px;
        height:60px;
        
    }
    .modal-all-friend-content .user_section_infos #ad{
        margin-top:5%;
        margin-left:15%;
        color:#273746;
        width:65px;
        height:30px;
        
    }
    .modal-all-friend-content .user_section_infos #infos{
        margin-top:5%;
        color:#273746;
        width:65px;
        height:30px;
        
    }
 
    .modal-all-friend-content .user_section_infos #ad{
        margin-top:2%;
        margin-left:6%;
        color:#273746;
        width:65px;
        height:30px;
        font-size:30px;
        
    }
    </style>
</head>
<body>
    
    <div id="modalfriend" class="modal-all-friend">
        <div class="modal-all-friend-content">

            <span class="close_friend">&times;</span>
            <?php
                    $Allnotification=$db->prepare("SELECT * FROM notifications WHERE user_name=:pseudo");

                    $Allnotification->execute(array
                    (
                        'pseudo'=>$user_name
                    )
                    );
            ?>
            <?php
                while($notification=$Allnotification->fetch()){
            ?>      
                <div class="user_section_infos">            
                    <p><?php echo $notification["sujet"] ?></p>
                    <p><?php echo $notification["noti_content"] ?></p>
                    <a href="../../../../RESEAU_SOCIAL/Controllers/Messages/read_message.controller.php"id="ad"><i class="fas fa-comments"></i></a>
                </div>
                                   
            <?php } ?>
        </div>
    </div>
</body>
</html>