<?php

    class User_coment
    {
        private $id_coment;
        private $id_publication;
        private $Auteur_coment;
        private $Auteur_picture;
        private $coment_content;
        private $heure;
        private $date;

        public function get_id_coment(){
          return $this->id_coment;
        }


        public function get_id_publication(){
            return $this->id_publication;
        }


        public function get_Auteur_coment(){
            return $this->Auteur_coment;
        }


        public function get_Auteur_picture(){
            return $this->Auteur_picture;
        }


        public function get_coment_content(){
            return $this->coment_content;
        }

        public function get_heure(){
            return $this->heure;
        }

        public function get_date(){
            return $this->date;
        }



        public function set_id_coment($new_id_coment){
            $this->id_coment=$new_id_coment;
        }


        public function set_id_publication($new_id_publication){
            $this->id_publication=$new_id_publication;
        }


        public function set_Auteur_coment($new_Auteur_coment){
            $this->Auteur_coment=$new_Auteur_coment;
        }


        public function set_Auteur_picture($new_Auteur_picture){
            $this->Auteur_picture=$new_Auteur_picture;
        }

        
        public function set_coment_content($new_coment_content){
            $this->coment_content=$new_coment_content;
        }
        

        public function set_heure($new_heure){
            $this->heure=$new_heure;
        }

        public function set_date($new_date){
            $this->date=$new_date;
        }
   

    }


?>