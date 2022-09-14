<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ed789acac1.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo "SUPER";
    $heure_msg=strftime("%X");
    echo $heure_msg;?>
    CREATE TABLE publications(
        id_publication INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        titre_publication VARCHAR(255) NOT NULL,
        Auteur_publication VARCHAR(255) NOT NULL,
        contenu_publication VARCHAR(255) NOT NULL,
        appreciation_publication VARCHAR(255) NOT NULL,
        commentaires_publication VARCHAR(255) NOT NULL)ENGINE=INNODB;


        CREATE TABLE UserMsg(
    id_msg INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(255) NOT NULL,
    receiver_name VARCHAR(255) NOT NULL,
    message VARCHAR(255) NOT NULL,
    msg_other_content VARCHAR(255)NULL,
    datemsg VARCHAR(255) NOT NULL,
    heuremsg VARCHAR(255) NOT NULL)ENGINE=INNODB;


    CREATE TABLE notifications(
    id_noti INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    sujet VARCHAR(255) NOT NULL,
    noti_content VARCHAR(255) NOT NULL,
    status INT(1) NOT NULL)ENGINE=INNODB;
  
    
Fatal error: Allowed memory size of 536870912 bytes exhausted (tried to allocate 16384 bytes) in C:\xampp\htdocs\RESEAU_SOCIAL\Models\Friends\Friends.admin.php on line 9
$Get_friend_infos=$db->prepare("SELECT * FROM friends,users WHERE friends.user_id=users.user_id"); 
</body>
</html>