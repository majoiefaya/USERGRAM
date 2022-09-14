<?php
    include("../../Models/DatabaseConnexion.php");
    include_once('admin.Class.php');

    class adminAdmin
    {   
        public function adminLogin($admin_name , $password)
        {
            global $db;

            $selectFromDb = $db->prepare('SELECT * FROM admin WHERE admin_name=:admin_name AND admin_Password=:password');

                    $selectFromDb->execute(
                        array(
                            'admin_name'=>$admin_name,
                            'password'=>$password
                        )
                    );

                    $result = $selectFromDb->fetch();

                    if ($result != null){
                        return $result;
                    }

            return null;
        }//END OF FUCNTION Login


        public function Add_admin(admin $admin)
        {
            global $db;

            $addadmin=$db->prepare("INSERT INTO admin(admin_name,admin_Password,admin_sexe,admin_phone_number,admin_picture,admin_Age,admin_email)
            VALUES(:admin_name,:admin_pass,:sexe,:phone_number,:admin_picture,:age,:email)");

            $addadmin->execute
            (
                array
                (
                    'admin_name'=>$admin->getadmin_name(),
                    'admin_pass'=>$admin->getPassword(),
                    'sexe'=>$admin->getSexe(),
                    'phone_number'=>$admin->getPhone_number(),
                    'admin_picture'=>$admin->getPicture(),
                    'age'=>$admin->get_Age(),
                    'email'=>$admin->get_email()
        
                )
            );
            echo("Données Enregistrées");

            $error=$addadmin->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;
        }//END OF FUCNTION Addadmins



        //Funcion to Set new Informations to an admin
        public function Updateadmins(admin $admin)
        {
            global $db;

            $UpdatePerson=$db->prepare("UPDATE admins SET admin_name=:admin_name,admin_Password=:admin_pass,sexe=:sexe,phone_number=:phone_number,Age=:age,email=:email WHERE admin_id=:id");
            $UpdatePerson->execute
            (
                array
                (
                    'id'=>$admin->getadminId(),
                    'admin_name'=>$admin->getadminname(),
                    'admin_pass'=>$admin->getPassword(),
                    'sexe'=>$admin->getSexe(),
                    'phone_number'=>$admin->getPhone_number(),
                    'age'=>$admin->get_Age(),
                    'email'=>$admin->get_email()
        
                )
            );
        
        }//END OF FUCNTION Updateadmins






        //Function To Delete An specific Person with his Id
        public function Erase_user($user_id)
        {
            global $db;

            
            $Deleteuser=$db->prepare('DELETE FROM users WHERE user_id=:id');
            
            $Deleteuser->execute(array
            (
                'id'=>$user_id
            )
            );

            $error=$Deleteuser->errorInfo();

            if(is_null($error[1]))
            {
                return true;
            }
            return false;

            $Delete_user_Publication=$db->prepare('DELETE FROM publications WHERE Auteur_publication=:pseudo');

            $Delete_user_Publication->execute(array
            (
                'pseudo'=>$user_name
            )
            );

        }//End of function



        public function ReadAlladmin()
        {
            global $db;
            $Table_admin=$db->query("SELECT *FROM admins");
            $Each_admin=$Table_admin->fetch();
            
            while($Each_admin=$Table_admin->fetch())
            {
                 echo $Each_admin["admin_id"];
                 echo $Each_admin["admin_name"];
                 echo $Each_admin["admin_Password"];
                 echo $Each_admin["sexe"];
                 echo $Each_admin["phone_number"];
                 echo $Each_admin["admin_picture"];
                 echo $Each_admin["Age"];
                 echo $Each_admin["email"];

            }
            
        }//END OF FUCNTION ReadAlladmins



        //Function to get ALL Info of a Person With his ID 
        public function ReadOneadmin($id)
        {
            global $id;
            global $db;

            $GetInfo=$db->prepare("SELECT * FROM admins WHERE admin_id=:id");

            $GetInfo->execute(array
            (
                'id'=>$id
            )
            );
        
            $infos=$GetInfo->fetch();

        }//END OF FUCNTION ReadOneadmin

     


    }
?>