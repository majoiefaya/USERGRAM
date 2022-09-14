<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
          background-color:black;
          background-image:url("../../../../RESEAU_SOCIAL/views/User/Style/Images/acceuil2.jpg")
        }
        img{
            margin-top: 90px;
            border:1px solid whitesmoke;
            border-radius:3px;
            width:17%;
            height:40%;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 2px;
            padding-right:2px;
        }


        img:hover{
            margin-top: 90px;
            border:1px solid whitesmoke;
            border-radius:3px;
            width:21%;
            height:40%;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 4px;
            padding-right:4px;
            transition:all .5s;
            transform:scale(1.8,2);
            
        }
        .lien{
            margin-top:10%;
            display:flex;
            text-align:center;
            margin-left:35%;
        }
        .lien a{
            background-color: dodgerblue;
            color: white;
            padding: 14px 3px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 10%;
            margin-left:10%;
            text-decoration:none;
        }
        .img{
           width:100%;
           height:100%;
           margin-left:35%;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="img">
        <img src="../../../../RESEAU_SOCIAL/views/User/Style/Images/acceuil1.png">
        <img src="../../../../RESEAU_SOCIAL/views/User/Style/Images/acceuil2.png">

    </div>
    <div class="lien">
    <a href="../../../../RESEAU_SOCIAL/views/User/Pages/Connexion.view.php">Connexion</a>   
    <a href="../../../../RESEAU_SOCIAL/views/User/Pages/Add_user.view.php">Inscription</a>
    </div>
</body>
</html>