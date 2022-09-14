<?php

    class UserMsg{
        private $id_msg;
        private $sender_name;
        private $receiver_name;
        private $message;
        private $msg_other_content;
        private $datemsg;
        private $heuremsg;



        public function get_id_msg()
        {
            return $this->id_msg;
        }

        public function set_id_msg($new_id_msg)
        {
             $this->id_msg=$new_id_msg;
        }



//////////////////////////////////////////////////////////////////////////


        public function get_sender_name()
        {
            return $this->sender_name;
        }

        public function set_sender_name($new_sender_name)
        {
             $this->sender_name=$new_sender_name;
        }
        


////////////////////////////////////////////////////////////////////////


        public function get_receiver_name()
        {
            return $this->receiver_name;
        }

        public function set_receiver_name($new_receiver_name)
        {
             $this->receiver_name=$new_receiver_name;
        }


////////////////////////////////////////////////////////////////////////
        public function get_msg()
        {
            return $this->message;
        }

        public function set_msg($new_msg)
        {
            $this->message=$new_msg;
        }



//////////////////////////////////////////////////////////////////


        public function get_msg_other_content()
        {
            return $this->msg_other_content;
        }

        public function set_msg_other_content($new_msg_other_content)
        {
            $this->msg_other_content=$new_msg_other_content;
        }


////////////////////////////////////////////////////////// 

        public function get_datemsg()
        {
            return $this->datemsg;
        }

        public function set_datemsg($new_datemsg)
        {
            $this->datemsg=$new_datemsg;
        }



/////////////////////////////////////////////////////

        public function get_heur_msg()
        {
            return $this->heuremsg;
        }

        public function set_heur_msg($new_heur_msg)
        {
            $this->heuremsg=$new_heur_msg;
        }

    }
?>