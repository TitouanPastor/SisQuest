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
    <header>
        <ul id="menu">
            <li><a href="#"><img src="imG/imageTest.jpg"></a></li>
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

        <span class="infokonami"></span>
        <section id="jeu">
        </section>
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
                    var firstLink = document.getElementsByTagName('link')[0];
                    firstLink.parentNode.removeChild(firstLink)
                    var link = document.createElement('link');
                    link.setAttribute('rel', 'stylesheet');
                    link.setAttribute('href', 'css/badstyle.css');
                    document.head.appendChild(link);
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

    var kdo1 = document.getElementById("cadeau1");
    kdo1.addEventListener("click", sessionCadeaux("cadeau1"));
    document.getElementById("cadeau2").addEventListener("click", sessionCadeaux("cadeau2"));
    document.getElementById("cadeau3").addEventListener("click", sessionCadeaux("cadeau3"));
    document.getElementById("cadeau4").addEventListener("click", sessionCadeaux("cadeau4"));
    document.getElementById("cadeau5").addEventListener("click", sessionCadeaux("cadeau5"));
    document.getElementById("cadeau6").addEventListener("click", sessionCadeaux("cadeau6"));
    document.getElementById("cadeau7").addEventListener("click", sessionCadeaux("cadeau7"));
    document.getElementById("cadeau8").addEventListener("click", sessionCadeaux("cadeau8"));
    document.getElementById("cadeau9").addEventListener("click", sessionCadeaux("cadeau9"));
    document.getElementById("cadeau10").addEventListener("click", sessionCadeaux("cadeau10"));

    tabCadeaux = [false, false, false, false, false, false, false, false, false, false]

    function sessionCadeaux(idDuCadeau) {
        console.log("azfaf")
        if (localStorage.getItem("cadeaux")) {

            tabCheck = localStorage.getItem("cadeaux");
            check = 0;

            while (tabCheck[i] == true) {
                check++;
            }
            if (check == 9) {
                // implémenter l'action a faire quand le joueur a 10 cadeaux
            }

            switch (idDuCadeau) {
                case "cadeau1":
                    tab[0] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau2":
                    tab[1] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau3":
                    tab[2] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau4":
                    tab[3] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau5":
                    tab[4] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau6":
                    tab[5] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau7":
                    tab[6] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau8":
                    tab[7] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau9":
                    tab[8] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
                case "cadeau10":
                    tab[9] = true;
                    localStorage.setItem("cadeaux", tabCadeaux);
                    break;
            }

        }
    }
</script>

</html>