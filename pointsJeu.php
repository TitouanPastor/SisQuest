<?php
    class Points{
        private $ptsUser;
        private $combo;


        public function __construct(){
            $this->ptsUser = 0;
            $this->combo = 1;
        }

        public function getPoints(){
            return $this->ptsUser;
        }

        public function getCombo(){
            return $this->combo;
        }

        public function setCombot($n){
            $this->combo = $n;
        }

        public function AddPoints($pts){
            $this->ptsUser += $pts*$this->combo;
        }

        public function raisePoints($pts){
            $this->ptsUser -= $pts;
        }

        public function AfficherPoints(){
            echo "Vous avez $this->ptsUser points";
        }

        public function updatePointsBDD($pseudo){
            require_once('BDD.php');
            $bdd = new BDD();
            $exist = $bdd->linkpdo->prepare('SELECT * FROM leaderboard WHERE pseudo = :pseudo');
            $exist->execute(array(
                'pseudo' => $pseudo
            ));

            $resultat = $exist->fetch();
            if ($resultat > 1){
                if ($this->ptsUser > $resultat["points"]){
                    $req = $bdd->linkpdo->prepare('UPDATE leaderboard SET points = :points WHERE pseudo = :pseudo');
                    $req->execute(array(
                        'points' => $this->ptsUser,
                        'pseudo' => $pseudo
                    ));
                }   
            }
            else{
                $req = $bdd->linkpdo->prepare('INSERT INTO leaderboard VALUES (NULL, :pseudo, :date, :points)');
                $req->execute(array(
                    'pseudo' => $pseudo,
                    'date' => date("Y-m-d"),
                    'points' => $this->ptsUser
                ));
            }
 
        }

        public function reponseCorrect($choix){
            if ($choix ==  $_SESSION['scenario']->getReponse()) {
                return true;
            }
            else{
                return false;
            }
        }




    }