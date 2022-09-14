<?php

    class admin{
        private $admin_id;
        private $admin_name;
        private $password;
        private $sexe;
        private $phone_number;
        private $admin_picture;
        private $Age;
        private $email;
      

        //admin_ID GET ET SET FUNCTION           
        public function getadminId(){
            return $this->admin_id;
        }

        public function setadminId($newadminId){
            $this->admin_id = $newadminId;
        }


        //admin_NAME GET ET SET FUNCTION           
        public function getadmin_name(){
            return $this->admin_name;
        }

        public function setadminname($newadminname){
            $this->admin_name = $newadminname;
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