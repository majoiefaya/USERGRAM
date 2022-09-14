<?php 

    Class User_publications{
        private $id_publication;
        private $titre_publication;
        private $Auteur_publication;
        private $Auteur_picture;
        private $image_publication;
        private $video_publication;
        private $music_publication;
        private $file_publication;
        private $text;
        private $date;
        private $heure;
    
        public function  get_id_publication(){
            return $this->id_publication;
        }

        public function get_titre_publication(){
            return $this->titre_publication;
        }     


        public function get_Auteur_publication(){
            return $this->Auteur_publication;
        }

        public function get_Auteur_picture(){
            return $this->Auteur_picture;
        }

        
        public function get_image_publication(){
            return $this->image_publication;
        }

        public function get_video_publication(){
            return $this->video_publication;
        }

        public function get_music_publication(){
            return $this->music_publication;
        }

        public function get_file_publication(){
            return $this->file_publication;
        }


        public function get_text_publication(){
            return $this->text_publication;
        }


        public function get_appreciation_publication(){
            return $this->appreciation_publication;
        }


        public function get_commentaires_publication(){
            return $this->commentaires_publication;
        }


        public function get_date(){
            return $this->date;
        }

        public function get_heure(){
            return $this->heure;
        }


        

        public function set_id_publication($new_id_publication){
            $this->id_publication=$new_id_publication;

        }


        public function set_titre_publication($new_titre_publication){
            $this->titre_publication=$new_titre_publication;
        }


        public function set_Auteur_publication($new_Auteur_publication){
            $this->Auteur_publication=$new_Auteur_publication;
        }

        public function set_Auteur_picture($new_Auteur_picture){
            $this->Auteur_picture=$new_Auteur_picture;
        }


        public function set_image_publication($new_image_publication){
            $this->image_publication=$new_image_publication;
        } 

        

        public function set_video_publication($new_video_publication){
            $this->video_publication=$new_video_publication;
        } 

        
        public function set_music_publication($new_music_publication){
            $this->music_publication=$new_music_publication;
        } 

        public function set_file_publication($new_file_publication){
            $this->file_publication=$new_file_publication;
        } 

        public function set_text_publication($new_text_publication){
            $this->text_publication=$new_text_publication;
        } 




        public function set_date($new_date){
            $this->date=$new_date;
        }    
        public function set_heure($new_heure){
            $this->heure=$new_heure;
        }    

}