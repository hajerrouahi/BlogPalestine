<?php
    class user{
        private $nom;
        private $prenom;
        private $email;
        private $type;
        private $motDePasse;
      

        function __construct($nom,$prenom,$email,$type,$motDePasse){
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->email=$email;
            $this->type=$type;
            $this->motDePasse=$motDePasse;
        }
        public function get_nom(){
            return $this->nom;
        }
        public function get_prenom(){
            return $this->prenom;
        }
    
        public function get_email(){
            return $this->email;
        }
        public function get_type(){
            return $this->type;
        }
        public function get_motDePasse(){
            return $this->motDePasse;
        }
       
    }
?>