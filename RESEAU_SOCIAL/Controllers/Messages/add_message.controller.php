
<?php
    session_start();

    $friend_id=$_GET["friend_id"];
    $user_id=$_GET["user_id"];

    include_once("../../Models/Messages/UserMsgAdmin.class.php");
    include_once("../../Models/Notifications/Notifications.Admin.class.php");

    $User_msg_admin=new UserMsgAdmin();

    $Allfriends=$db->prepare("SELECT * FROM friends WHERE friend_id=:id_fr");
    $Allfriends->execute(
        array(
            'id_fr'=>$friend_id
        )
    );
    $friend=$Allfriends->fetch();

    $message=new UserMsg();

    $sender_name=$_SESSION["pseudo"];
    $receiver_name=$friend["friend_name"];
    $receiver_picture=$friend["friend_user_picture"];
    $msg=$_POST["msg"];
    $date_msg=strftime("%A %d %B %Y");
    $heure_msg=strftime("%X");


    $message->set_sender_name($sender_name);
    $message->set_receiver_name($receiver_name);
    $message->set_msg($msg);
    $message->set_datemsg($date_msg);
    $message->set_heur_msg($heure_msg);

    $User_msg_admin->send_message($message);

    $notification=new Notifications();

    $default_statuts=0;

    $notification->set_user_name($receiver_name);
    $notification_>set_user_picture($receiver_picture);
    $notification->set_sujet("Message");
    $notification->set_noti_content("Message From".$sender_name);
    $notification->set_statuts($default_statuts);

    $notifiAdmin=new NotifiAdmin();
    $notifiAdmin->CreateNotifi($notification);

    include("../../../RESEAU_SOCIAL/views/Messages/Pages/send_msg.view.php");

?>