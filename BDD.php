<?php
    class BDD{
        //Connection to BDD
        public function __construct(){
           ///Connexion au serveur MySQL avec PDO
            $server = '54.37.31.19';
            $login  = 'u743447366_iutinfo';
            $mdp    = '0h/GnNOoWZF1';
            $db     = 'u743447366_nuitinfo';

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