<?php
    class user{
        private $pseudo; 

        public function __construct($pseudo){
            $this->pseudo = $pseudo;
        }

        public function getPseudo(){
            return $this->pseudo;
        }

        public function pseudoExist(){
            require_once('BDD.php');
            $bdd = new BDD();
            $req = $bdd->linkpdo->prepare('SELECT pseudo FROM user WHERE pseudo = :pseudo');
            $req->execute(array(
                'pseudo' => $this->pseudo
            ));
            $resultat = $req->fetch();
            if($resultat){
                return true;
            }
            else{
                return false;
            }
        }

        


    }

?>