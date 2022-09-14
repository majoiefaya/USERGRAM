<?php

    class User{
        private $user_id;
        private $user_name;
        private $password;
        private $sexe;
        private $phone_number;
        private $user_picture;
        private $Age;
        private $email;
      

        //USER_ID GET ET SET FUNCTION           
        public function getUserId(){
            return $this->user_id;
        }

        public function setUserId($newUserId){
            $this->user_id = $newUserId;
        }


        //USER_NAME GET ET SET FUNCTION           
        public function getUsername(){
            return $this->user_name;
        }

        public function setUsername($newUsername){
            $this->user_name = $newUsername;
        }



        //Password GET ET SET FUNCTION         
        public function getPassword(){
            return $this->password;
        }

        public function setPassword($newPassword){
            $this->password = $newPassword;
        }



        //SEXE GET ET SET FUNCTION         
        public function getSexe(){
            return $this->sexe;
        }

        public function setSexe($newSexe){
            $this->sexe = $newSexe;
        }

        //Phone_number GET ET SET FUNCTION         

        public function getPhone_number(){
            return $this->phone;
        }


        public function setPhone_number($newPhone){
            $this->phone = $newPhone;
        }

        //Picture GET ET SET FUNCTION 

        public function getPicture(){
            return $this->picture;
        }

    
        public function setPicture($newPicture){
            $this->picture = $newPicture;
        }


        //age

        public function get_Age()
        {
            return $this->Age;
        }


        public function set_Age($new_age)
        {
            $this->Age=$new_age;
        }



        //email

        public function get_email()
        {
            return $this->email;
        }



        public function set_email($new_mail)
        {
            if(!empty($new_mail))
            {
                $this->email=$new_mail;
            } 
        }



        
    }


    
?> 