<?php
    class Scenario{ 
        private $arrayScenario;
        private $scenarioPlayed;
        private const NBSCENARIO  = 38;
        private const NBPOSER  = 10;
        private $actualScenario;

        public function __construct(){
            $this->arrayScenario = array();
            $this->scenarioPlayed = array();
            $this->actualScenario = 1;

        }

        public function randomScenario(){
            require_once('BDD.php');
            $bdd = new BDD();
            for ($i = 1; $i <= $this::NBPOSER ; $i++) {
                $random = rand(5, $this::NBSCENARIO+4);
                while (in_array($random, $this->scenarioPlayed)) {
                    $random = rand(5, $this::NBSCENARIO+4   );
                }
                array_push($this->scenarioPlayed, $random);
                $req = $bdd->linkpdo->prepare('select * from scenario where id_scenario = :idScenario');
                $req->execute(array(
                    'idScenario' => $random
                ));
                while ($donnees = $req->fetch()) {
                    array_push($this->arrayScenario, $donnees);
                }

            }
        }

        public function nextScenario(){
            $this->actualScenario++;

        }

        public function printScenario(){ 
            
            $scenario = $this->arrayScenario[$this->actualScenario-1];
            echo "Question : ".$this->actualScenario."/".$this::NBPOSER;
            echo "<div id='question'>".$scenario['question']."</div><br>";    
            echo "Choisir la bonne réponse parmis les choix suivants : <br>";
            
            echo '<form id="form" action="index.php" method="POST">';
            $rep = explode(":",$scenario['reponse']);
            for ($i = 1; $i <= $scenario['nbReponse']; $i++) {
                echo '<div id = "reponse"><input type="radio" id="choix'.$i.'" name="choix" value="'.$i.'">
                <label for="choix'.$i.'">'.$rep[$i-1].'</label></div><br>';
            }
              
        }

        public function getReponse(){
            $scenario = $this->arrayScenario[$this->actualScenario-1];
            return $scenario['reponseJuste'];
        }

        public function endgame(){
            if($this->actualScenario == $this::NBPOSER){
                return true;
            }
            else{
                return false;
            }
        }

        public function printTips($reponse){
            $scenario = $this->arrayScenario[$this->actualScenario-1];
            if ($reponse){
                echo $scenario["textTrue"];
            }else{
                echo $scenario["textFalse"];
            }
           
        }

        public function getTheme(){
            $scenario = $this->arrayScenario[$this->actualScenario-1];
            echo $scenario["theme"];
            return $scenario["theme"];
        }

        
    }



?>