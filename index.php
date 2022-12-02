<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SidaCaca | SIS ASSOCIATION</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        session_start();
        if (!isset($_SESSION['badges'])){
                $_SESSION['badges'] = new Badge();
        }
        
    ?>
    <div id="drag" class="drag"></div>
    <video width="500px" height="500px" playsinline controls>
        <source src="img/fantinvideo.webm" type="video/webm">
    </video>
    <header>
        <ul id="menu">
            <li><a onclick="fantin()" href="#"><img src="imG/imageTest.jpg"></a></li>
            <li><a href="#info1">info1</a></li>
            <li><a href="#info2">info2</a></li>
            <li><a href="#info3">info3</a></li>
        </ul>
    </header>
    <main>

        <img class="cadeau" id="cadeau1" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau2" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau3" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau4" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau5" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau6" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau7" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau8" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau9" src="img/cadeau.png" alt="Un cadeau">
        <img class="cadeau" id="cadeau10" src="img/cadeau.png" alt="Un cadeau">

        <span class="infodragdrop"></span>
        <span class="infokonami"></span>
        <section id="jeu">
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
                    echo '<form id="form" action="index.php" method="POST">';
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
                echo '<form id="form" action="index.php" method="POST">';
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
        </section>

        <div id="dragtarget" class="dragtarget"></div>
        <section id="information">
            <article id="info1" class="information-article">
                <h1>Informations 1</h1>
                <div class="contenu">
                    <img src="img/imageTest.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi tempora iure dignissimos placeat suscipit nostrum error voluptatem, dolor non architecto eum delectus distinctio veritatis minima mollitia eligendi quam maxime aliquid!</p>
                </div>
            </article>
            <article id="info2" class="information-article reverse">
                <h1>Informations 2</h1>
                <div class="contenu">
                    <img src="img/imageTest.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi tempora iure dignissimos placeat suscipit nostrum error voluptatem, dolor non architecto eum delectus distinctio veritatis minima mollitia eligendi quam maxime aliquid!</p>
                </div>
            </article>
            <article id="info3" class="information-article">
                <h1>Informations 3</h1>
                <div class="contenu">
                    <img src="img/imageTest.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi tempora iure dignissimos placeat suscipit nostrum error voluptatem, dolor non architecto eum delectus distinctio veritatis minima mollitia eligendi quam maxime aliquid!</p>
                </div>
            </article>

        </section>

    </main>
    <footer>
        <div id="membres" class="divfooter">
            <h2>Les membres de l'équipe :</h1>
                <ul>
                    <li><a href="blablabla" target="_blank">Nicolas Rousseau</a></li>
                    <li><a href="blablabla" target="_blank">Quentin Couturier</a></li>
                    <li><a href="blablabla" target="_blank">Mendy Paul</a></li>
                    <li><a href="blablabla" target="_blank">Arthur Weidner</a></li>
                    <li><a href="blablabla" target="_blank">Noa Despaux</a></li>
                    <li><a href="blablabla" target="_blank">Jehan Philipon</a></li>
                    <li><a href="blablabla" target="_blank">Téo Asseline</a></li>
                </ul>
                <ul>
                    <li><a href="blablabla" target="_blank">Elena Chelle</a></li>
                    <li><a href="blablabla" target="_blank">Chloe Sechi</a></li>
                    <li><a href="blablabla" target="_blank">Gaïa Ducournau</a></li>
                    <li><a href="https://www.linkedin.com/in/cl%C3%A9ment-faux-8a6609252/" target="_blank">Clément Faux</a></li>
                    <li><a href="https://baychebaptiste.com/fr/index.html" target="_blank">Baptiste Bayche</a></li>
                    <li><a href="https://www.titouanpastor.com/" target="_blank">Titouan Pastor</a></li>
                </ul>
        </div>
        <div id="logos" class="divfooter">
            <ul>
                <li><a href="https://www.nuitdelinfo.com/" target="_blank"><img src="img/logoNDL.svg" alt="logo nuit de l'info" /></a></li>
                <li><a href="https://iut.univ-tlse3.fr/informatique" target="_blank"><img src="img/logoIUT.png" alt="logo iut informatique paul sabatier" /></a></li>
                <li>
                <li><a href="https://www.univ-tlse3.fr/" target="_blank"><img src="img/logo_UT3.png" alt="logo de l'université paul sabatier" /></a></li>
            </ul>
        </div>
    </footer>

</body>
<script>
    // KONAMI CODE

    checkKonami = 0;
    const UP = '38';
    const DOWN = '40';
    const RIGHT = '39';
    const LEFT = '37';
    const A = '65';
    const B = '66';

    document.addEventListener('keydown', (event) => {
        const touche = event.keyCode;
        konamiTab = [UP, UP, DOWN, DOWN, LEFT, RIGHT, LEFT, RIGHT, B, A];

        switch (checkKonami) {
            case 0:
                if (touche == UP) {
                    checkKonami++;
                }
                break;
            case 1:
                if (touche == UP) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 2:
                if (touche == DOWN) {
                    checkKonami++;

                } else {
                    checkKonami = 0;
                }
                break;
            case 3:
                if (touche == DOWN) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 4:
                if (touche == LEFT) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 5:
                if (touche == RIGHT) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 6:
                if (touche == LEFT) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 7:
                if (touche == RIGHT) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 8:
                if (touche == B) {
                    checkKonami++;
                } else {
                    checkKonami = 0;
                }
                break;
            case 9:
                if (touche == A) {
                    //KONAMI CODE FAIT !!!!!
                    // A IMPLEMENTER
                    document.querySelector('.infokonami').innerHTML = "KONAMI CODE FAIT !!!!!";

                    checkKonami = 0;
                } else {
                    checkKonami = 0;
                }
                break;
            default:
                checkKonami = 0;
                break;
        }
    });

    // EASTEREGG CADEAU

    // A METTRE DANS TOUTES LES PAGES CONTENANT DES CADEAUX
    // LA SESSION S'APPELLE "cadeaux"
    // LES IDs DES CADEAUX DOIVENT S'APPELER "cadeauX"

    document.getElementById("cadeau1").addEventListener("click", function() {
        sessionCadeaux("cadeau1");
    });
    document.getElementById("cadeau2").addEventListener("click", function() {
        sessionCadeaux("cadeau2");
    });
    document.getElementById("cadeau3").addEventListener("click", function() {
        sessionCadeaux("cadeau3");
    });
    document.getElementById("cadeau4").addEventListener("click", function() {
        sessionCadeaux("cadeau4");
    });
    document.getElementById("cadeau5").addEventListener("click", function() {
        sessionCadeaux("cadeau5");
    });
    document.getElementById("cadeau6").addEventListener("click", function() {
        sessionCadeaux("cadeau6");
    });
    document.getElementById("cadeau7").addEventListener("click", function() {
        sessionCadeaux("cadeau7");
    });
    document.getElementById("cadeau8").addEventListener("click", function() {
        sessionCadeaux("cadeau8");
    });
    document.getElementById("cadeau9").addEventListener("click", function() {
        sessionCadeaux("cadeau9");
    });
    document.getElementById("cadeau10").addEventListener("click", function() {
        sessionCadeaux("cadeau10");
    });

    tabCadeaux = [false, false, false, false, false, false, false, false, false, false]
    var nbkdo = 0;

    function sessionCadeaux(idDuCadeau) {

        var kdo = document.getElementById(idDuCadeau);
        if (kdo.getAttribute("src") != "img/cadeau-open.png") {
            nbkdo++;
            kdo.setAttribute("src", "img/cadeau-open.png");
        }

        if (nbkdo == 10) {
            // implémenter l'action a faire quand le joueur a 10 cadeaux
            console.log("10 cadeaux");
        }
    }

    // FANTIN
    nbClicksFantin = 0;
    async function fantin() {
        nbClicksFantin++;
        if (nbClicksFantin == 13) {
            nbClicksFantin = 0;
            // ouvrir video
            var videofantin = document.getElementsByTagName("video")[0];
            videofantin.style.display = "block";
            videofantin.play();
            await new Promise(r => setTimeout(r, 10000));
            videofantin.style.display = "none";
        }
    }

    // EASTEREGG DRAG DROP

    // ON GET LA DIV DRAGGABLE
    var drag = document.getElementById("drag");
    var target = document.getElementById("dragtarget");
    var checkPossedeImage = false;
    drag.addEventListener("click", (event) => {
        console.log(checkPossedeImage)
        if (checkPossedeImage) {
            checkPossedeImage = false;
            if (
                event.clientX <= target.offsetLeft + 42 &&
                event.clientX >= target.offsetLeft &&
                event.clientY <= target.offsetTop + 42 &&
                event.clientY >= target.offsetTop && checkPossedeImage == false
            ) {
                // C GENIAL C SUPER C LE FEU TA GAGNE
                var spaninfodrag = document.getElementById('dragtarget');
                spaninfodrag.innerHTML = "C GENIAL C SUPER C LE FEU TA GAGNE";
            }
        } else {
            checkPossedeImage = true;
            document.addEventListener("mousemove", (event) => {
                if (checkPossedeImage) {
                    drag.style.left = event.clientX - 10 + "px";
                    drag.style.top = event.clientY - 10 + "px";
                }
            });
        }
    });
</script>

</html>