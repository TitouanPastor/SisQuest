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
    if(session_status() === PHP_SESSION_ACTIVE){
        unset($_SESSION['scenario']);
        unset($_SESSION['points']);
    }
    session_start();
    //session_destroy();    
  
        
    if (!isset($_SESSION['scenario'])){
        echo '<h1>Destin - IST</h1>';

        echo '<p>Répondez aux questions correctement pour gagner des points !</p>';
        require_once('scenario.php');
        $_SESSION['scenario'] = new Scenario();
        $_SESSION['points'] = new Points();
        $_SESSION['scenario']->randomScenario();
        $_SESSION['scenario']->printScenario();
        echo '<input type="submit" name="valider" value="Valider le choix">';
    }else{
        if (isset($_POST['valider'])) {
            echo '<form id="form" action="destin-IST.php" method="POST">';
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
    
    if (isset($_POST['deco'])) {

        setcookie('pseudo', '', time() - 3600 * 24);
    }

    if (isset($_POST['next'])) {
        $_SESSION['scenario']->nextScenario();
        $_SESSION['scenario']->printScenario();
        echo '<input type="submit" name="valider" value="Valider le choix">';
    }
    if (isset($_POST['end'])) {
        echo '<form id="form" action="destin-IST.php" method="POST">';
        echo 'fin du jeu ! bravo !';
        echo 'Entrer votre pseudo : <input type="text" name="pseudo" id="pseudo">';
        echo '<input type="submit" name="send" value="Envoyer le score">';
        
    }

    if (isset($_POST['send'])) {
        $_SESSION['points']->updatePointsBDD($_POST['pseudo']);
        echo 'Votre score a été envoyé !';
        require_once('leaderboard.php');
        $leaderboard = new leaderboard();
        $leaderboard->printLeaderboard();
        unset($_SESSION['scenario']);
        unset($_SESSION['points']);
    
    }
}

    ?>


    </form>

</body>

</html>