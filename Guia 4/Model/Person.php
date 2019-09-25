<?php
namespace Model;

     abstract class Person {

        private $id;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        // constructor method //
        public function __construct() ($idReceived, $firstNameReceived, $lastNameReceived, $dniReceived, $emailReceived) {
            $this->id= $idReceived;
            $this->firstName= $firstNameReceived;
            $this->lastName= $lastNameReceived;
            $this->dni= $dniReceived;
            $this->email= $emailReceived;
        }
        
        // set methods //
        private function setId ($idReceived){
            $this->id= $idReceived;
        }

        private function setFirstName ($firstNameReceived){
            $this->firstName= $firstNameReceived;
        }

        private function setLastName ($lastNameReceived){
            $this->lastName= $lastNameReceived;
        }

        private function setDni ($dniReceived){
            $this->dni= $dniReceived;
        }

        private function setEmail ($emailReceived){
            $this->email= $emailReceived;
        }

        // get methds //
        private function getId (){
            return $this->id;
        }

        private function getFirstName (){
            return $this->firstName;
        }

        private function getLastName (){
            return $this->lastName;
        }

        private function getDni (){
            return $this->dni;
        }

        private function getEmail (){
            return $this->email;
        }
    }







?>