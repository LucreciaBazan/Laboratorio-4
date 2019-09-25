<?php
namespace Model;

    class Client {
        private $userName;
        private $password;

        // constructor method //
        public function __construc($userNameReceived, $passwordReceived){
            $this->userName = $userNameReceived;
            $this->password = $passwordReceived;
        } 


        // set methods //
        private function setUserName ($userNameReceived){
            $this->userName = $userNameReceived;
        }

        private function setPassword ($passwordReceived){
            $this->password = $passwordReceived;
        }


        // get methds //
        private function getUserName(){
            return $this->userName;
        }

        private function getPassword(){
            return $this->password;
        }
    }



?>