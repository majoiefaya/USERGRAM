<?php

    class Notifications{
        private $id_noti;
        private $user_name;
        private $user_picture;
        private $sujet;
        private $noti_content;
        private $status;


        public function get_id_noti(){
            return $this->id_noti;
        }
        public function set_id_noti($new_id_noti){
            $this->id_noti=$new_id_noti;
        }


        public function get_user_name(){
            return $this->user_name;
        }
        public function set_user_name($new_user_name){
            $this->user_name=$new_user_name;
        }


        public function get_user_picture(){
            return $this->user_picture;
        }
        public function set_user_picture($new_user_picture){
            $this->user_picture=$new_user_picture;
        }

        public function get_sujet(){
            return $this->sujet;
        }
        public function set_sujet($new_sujet){
            $this->sujet=$new_sujet;
        }


        public function get_noti_content(){
            return $this->noti_content;
        }
        public function set_noti_content($new_noti_content){
            $this->noti_content=$new_noti_content;
        }


        public function get_statuts(){
            return $this->statuts;
        }
        public function set_statuts($new_statuts){
            $this->statuts=$new_statuts;
        }
    }
?>