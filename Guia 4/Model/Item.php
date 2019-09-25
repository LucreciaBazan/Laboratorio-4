<?php
namespace Model;

    class Item {

        private $name;
        private $description;
        private $price;
        private $quantity;


        // constructor method //
        public function __construc($nameReceived, $descriptionReceived, $priceReceived, $quantityReceived){
            $this->name= $nameReceived;
            $this->description= $descriptionReceived;
            $this->price= $priceReceived;
            $this->quantity= $quantityReceived;
        }


        // set methods //
        private function setName ($nameReceived){
            $this->name= $nameReceived;
        }

        private function setDescription ($descriptionReceived){
            $this->description= $descriptionReceived;
        }

        private function setPrice ($priceReceived){
            $this->price= $priceReceived;
        }

        private function setQuantity ($quantityReceived){
            $this->quantity= $quantityReceived;
        }


        // get methods //
        public function getName(){
            return $this->name;
        }

        public function getDescription(){
            return $this->description;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getQuantity(){
            return $this->quantity;
        }



        
    }
?>