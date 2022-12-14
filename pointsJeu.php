<?php
    class Points{
        private $ptsUser;
        private $combo;

        private $sexe;
        private $mst;
        private $faitInsolite;
        private $vaccin;
        private $grossesse;
        private $regle;


        public function __construct(){
            $this->ptsUser = 0;
            $this->combo = 1;
            // $this->sexe = 0;
            // $this->mst = 0;
            // $this->faitInsolite = 0;
            // $this->vaccin = 0;
            // $this->grossesse = 0;
            // $this->regle = 0;
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
            if ($this->ptsUser-1 >=0 ){
                $this->ptsUser -= $pts;
            }
            
        }

        public function AfficherPoints(){
            echo '<p class="nbpoints">Vous avez '.$this->ptsUser.' points</p>';
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