<?php
namespace Model;

    class Bill {

        private $date;
        private  $type;
        private $number;


        // constructor method //
        public __construc($dateReceived, $typeReceived, $numberReceived){
            $this->date= $dateReceived;
            $this->type= $typeReceived;
            $this->number= $numberReceived;
        }


        // set methods //
        private function setDate ($dateReceived){
            $this->date= $dateReceived;
        }

        private function setType ($typeReceived){
            $this->type= $typeReceived;
        }

        private function setNumber ($numberReceived){
            $this->number= $numberReceived;
        }


        //get methods//
        private function getDate(){
            return $this->date;
        }

        private function getType(){
            return $this->type;
        }

        private function getNumber(){
            return $this->number;
        }



    }
?>