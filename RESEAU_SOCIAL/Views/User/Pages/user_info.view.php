<?php
session_start();

$user_name=$_SESSION["pseudo"];
$Get_USER_Info=$db->prepare("SELECT * FROM users WHERE user_name=:pseudo");

$Get_USER_Info->execute(array
(
    'pseudo'=>$user_name
)
);
$User_info=$Get_USER_Info->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .infos{
            display:block;
            width:50%;
            height:100%;
            background-color:#3498DB;
            margin:auto;
            position:center;
         
            
        }
        .infos img{
            max-width:70%;
            max-height:30%;
            margin:auto;
            position:center;
            display:flex;
        }
        .infos label{
            color:white;
            font-size:19px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="infos">

        <img src="../../../../RESEAU_SOCIAL/views/User/User_img_Profil/<?php echo $User_info["user_picture"];?>"/>
        <section id="sec1">
        <label>Nom_Utilisateur:</label><?php echo $User_info["user_name"] ?>
        </section>

        <section>
        <label>Mot de Passe:</label><?php echo $User_info["user_Password"] ?>
        </section>

        <section>
        <label>Sexe:</label><?php echo $User_info["sexe"]?>
        </section>

        <section>
        <label>Numero de Telephone:</label><?php echo $User_info["phone_number"]?>
        </section>

        <section>
        <label>Age:</label><?php echo $User_info["Age"] ?>
        </section>
        
        <section>
        <label>Addresse-Mail:</label><?php echo $User_info["email"]?>    
        </section>                         
    </div>
</body>
</html>