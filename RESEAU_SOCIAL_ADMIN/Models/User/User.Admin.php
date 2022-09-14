<?php
    include("../../Models/DatabaseConnexion.php");
    include_once('User.Class.php');

    class UserAdmin
    {   
        public function UserLogin($user_name , $password)
        {
            global $db;

            $selectFromDb = $db->prepare('SELECT * FROM users WHERE user_name=:username AND user_Password=:password');

                    $selectFromDb->execute(
                        array(
                            'username'=>$user_name,
                            'password'=>$password
                        )
                    );

                    $result = $selectFromDb->fetch();

                    if ($result != null){
                        return $result;
                    }

            return null;
        }//END OF FUCNTION Login


        public function AddUsers(User $user)
        {
            global $db;

            $addUser=$db->prepare("INSERT INTO users(user_name,user_Password,sexe,phone_number,user_picture,Age,email)
            VALUES(:user_name,:user_pass,:sexe,:phone_number,:user_picture,:age,:email)");

            $addUser->execute
            (
                array
                (
                    'user_name'=>$user->getUsername(),
                    'user_pass'=>$user->getPassword(),
                    'sexe'=>$user->getSexe(),
                    'phone_number'=>$user->getPhone_number(),
                    'user_picture'=>$user->getPicture(),
                    'age'=>$user->get_Age(),
                    'email'=>$user->get_email()
        
                )
            );
            echo("Données Enregistrées");

            $error=$addUser->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;
        }//END OF FUCNTION AddUsers



        //Funcion to Set new Informations to an User
        public function UpdateUsers(User $user)
        {
            global $db;

            $UpdatePerson=$db->prepare("UPDATE users SET user_name=:user_name,user_Password=:user_pass,sexe=:sexe,phone_number=:phone_number,Age=:age,email=:email WHERE user_id=:id");
            $UpdatePerson->execute
            (
                array
                (
                    'id'=>$user->getUserId(),
                    'user_name'=>$user->getUsername(),
                    'user_pass'=>$user->getPassword(),
                    'sexe'=>$user->getSexe(),
                    'phone_number'=>$user->getPhone_number(),
                    'age'=>$user->get_Age(),
                    'email'=>$user->get_email()
        
                )
            );
        
        }//END OF FUCNTION UpdateUsers






        //Function To Delete An specific Person with his Id
        public function Erase_User($user_name)
        {
            global $db;

            
            $DeleteUser=$db->prepare('DELETE FROM users WHERE user_name=:pseudo');
            
            $DeleteUser->execute(array
            (
                'pseudo'=>$user_name
            )
            );

            $error=$DeleteUser->errorInfo();

            if(is_null($error[1]))
            {
                return true;
            }
            return false;

            $Delete_User_Publication=$db->prepare('DELETE FROM publications WHERE Auteur_publication=:pseudo');

            $Delete_User_Publication->execute(array
            (
                'pseudo'=>$user_name
            )
            );

        }//End of function



        public function ReadAllUser()
        {
            global $db;
            $Table_User=$db->query("SELECT *FROM users");
            $Each_User=$Table_User->fetch();
            
            while($Each_User=$Table_User->fetch())
            {
                 echo $Each_User["user_id"];
                 echo $Each_User["user_name"];
                 echo $Each_User["user_Password"];
                 echo $Each_User["sexe"];
                 echo $Each_User["phone_number"];
                 echo $Each_User["user_picture"];
                 echo $Each_User["Age"];
                 echo $Each_User["email"];

            }
            
        }//END OF FUCNTION ReadAllUsers



        //Function to get ALL Info of a Person With his ID 
        public function ReadOneUser($id)
        {
            global $id;
            global $db;

            $GetInfo=$db->prepare("SELECT * FROM users WHERE user_id=:id");

            $GetInfo->execute(array
            (
                'id'=>$id
            )
            );
        
            $infos=$GetInfo->fetch();

        }//END OF FUCNTION ReadOneUser

     


    }
?>