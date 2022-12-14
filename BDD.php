<?php
    class BDD{
        //Connection to BDD
        public function __construct(){
           ///Connexion au serveur MySQL avec PDO
            $server = ';
            $login  = '';
            $mdp    = '';
            $db     = '';

            try {
                $this->linkpdo = new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
                $this->linkpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            ///Capture des erreurs éventuelles
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());

        }
    }
}
