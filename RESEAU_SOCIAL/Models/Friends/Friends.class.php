<?php

    class Friends{
        private $user_id;
        private $friend_id;
        private $user_name;
        private $user_picture;
        private $friend_name;
        private $friend_password;
        private $friend_sexe;
        private $friend_phone_number;
        private $friend_Age;
        private $friend_email;
        private $friend_picture;

        public function getUserId(){
            return $this->user_id;
        }

        public function setUserId($newUserId){
            $this->user_id =$newUserId;
        }



        public function get_Friend_Id(){
            return $this->friend_id;
        }

        public function set_Friend_Id($newfriend_id){
            $this->friend_id =$newfriend_id;
        }




        //USER_NAME GET ET SET FUNCTION           
        public function getUsername(){
            return $this->user_name;
        }

        public function setUsername($newUsername){
            $this->user_name = $newUsername;
        }

        
         //USER_NAME GET ET SET FUNCTION           
        public function get_user_picture(){
            return $this->user_picture;
        }

        public function set_user_picture($new_user_picture){
            $this->user_picture = $new_user_picture;
        }




        //USER_NAME GET ET SET FUNCTION For FRIEND      
        public function get_friend_name(){
            return $this->friend_name;
        }

        public function set_friend_name($newUsername){
            $this->friend_name = $newUsername;
        }



        //Password GET ET SET FUNCTION         
        public function get_friend_Password(){
            return $this->friend_password;
        }

        public function set_friend_Password($newPassword){
            $this->friend_password = $newPassword;
        }



        //SEXE GET ET SET FUNCTION         
        public function get_friend_sexe(){
            return $this->friend_sexe;
        }

        public function set_friend_sexe($newSexe){
            $this->friend_sexe = $newSexe;
        }

        //Phone_number GET ET SET FUNCTION         

        public function get_friend_Phone_number(){
            return $this->friend_phone_number;
        }


        public function set_friend_Phone_number($newPhone){
            $this->friend_phone_number= $newPhone;
        }



        //age

        public function get_friend_Age()
        {
            return $this->friend_Age;
        }


        public function set_friend_Age($new_age)
        {
            $this->friend_Age=$new_age;
        }



        //email

        public function get_friend_email()
        {
            return $this->friend_email;
        }



        public function set_friend_email($new_mail)
        {
            if(!empty($new_mail))
            {
                $this->friend_email=$new_mail;
            } 
        }


        //Picture GET ET SET FUNCTION 

        public function get_friend_picture(){
            return $this->friend_picture;
        }

    
        public function set_friend_picture($newPicture){
            $this->friend_picture = $newPicture;
        }


      



        
    }


    
?> 