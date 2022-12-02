<?php
    class leaderboard{

        private $req;
        public function __construct(){
            require_once('BDD.php');
            $bdd = new BDD();
            $this->req = $bdd->linkpdo->prepare('SELECT * FROM leaderboard ORDER BY points DESC LIMIT 10');
        }

        public function printLeaderboard(){
            echo "<br><br><h3>Classement<h3/><br>";
            $this->req->execute();
            while($resultat = $this->req->fetch()){
                echo $resultat["pseudo"]." ".$resultat["date_score"]." ".$resultat["points"]."<br><br>";

            
            }
        }
    }