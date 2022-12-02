<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destin - IST</title>
</head>

<body>
    <?php
    require_once('scenario.php');
    require_once('pointsJeu.php');
    session_start();
    //session_destroy();
    ?>


    <?php
    if (!isset($_COOKIE['pseudo'])){
        echo '<p>Avant de jouer rentrez votre pseudo :</p>
         <form action="destin-IST.php" method="POST">';
        echo '<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">';
        echo '<input type="submit" name="validerPseudo" value="Valider">';
        echo '</form>';
        if (isset($_POST['validerPseudo'])){
            $pseudo = $_POST['pseudo'];
            setcookie('pseudo', $pseudo, time() + 365*24, null, null, false, true);
        }
       
    }
    else{
        echo '<form id="form" action="destin-IST.php" method="POST">';
        echo "Connecter en tant que : ".$_COOKIE['pseudo'];
        echo '<input type="submit" name="deco" value="Se déconnecter!">';

        if (!isset($_SESSION['scenario'])) {
            echo '<h1>Destin - IST</h1>';

            echo '<p>Répondez aux questions correctement pour gagner des points !</p>';
            require_once('scenario.php');
            $_SESSION['scenario'] = new Scenario();
            $_SESSION['points'] = new Points();
            $_SESSION['scenario']->randomScenario();
            $_SESSION['scenario']->printScenario();
            echo '<input type="submit" name="valider" value="Valider le choix">';
        } else {
            if (isset($_POST['valider'])) {
                
                if ($_SESSION['points']->reponseCorrect($_POST['choix'])) {
                    echo "Bonne réponse !";
                    $_SESSION['points']->addPoints(1);
                    $_SESSION['points']->setCombot($_SESSION['points']->getCombo() + 1);
                    echo $_SESSION['scenario']->printTips(True);
                } else {
                    echo "Mauvaise réponse !";
                    $_SESSION['points']->setCombot(0);
                    $_SESSION['points']->raisePoints(1);
                    echo $_SESSION['scenario']->printTips(False);
                }
                echo $_SESSION['points']->AfficherPoints();
                if ($_SESSION['scenario']->endgame()) {
                    echo '<input type="submit" name="end" value="Terminer!">';

                    
                } else {
                    echo '<input type="submit" name="next" value="Prochaine question">';
                    if (isset($_POST['next'])) {
                        echo "oktamer";
                        $_SESSION['scenario']->nextScenario();
                        $_SESSION['scenario']->printScenario();
                        echo '<input type="submit" name="valider" value="Valider le choix">';
                    }
                }
            }

            
        }
        if (isset($_POST['deco'])){
            
            setcookie('pseudo', '', time()-3600*24, '/', '', false, false);
        
        }

        if (isset($_POST['next'])) {    
            $_SESSION['scenario']->nextScenario();
            $_SESSION['scenario']->printScenario();
            echo '<input type="submit" name="valider" value="Valider le choix">';
        }
        if (isset($_POST['end'])) {
            echo 'fin du jeu ! bravo !';
            $_SESSION['points']->updatePointsBDD();
            require_once('leaderboard.php');
            $leaderboard = new leaderboard();
            $leaderboard->printLeaderboard();
            session_destroy();
        }
    }
    ?>


    </form>

</body>

</html>