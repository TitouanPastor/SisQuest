<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SexInfo | SIS ASSOCIATION</title>
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
        <span class="infokonami">info</span>
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
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempore saepe, aspernatur nihil cupiditate doloremque. Inventore earum incidunt, aperiam quo, doloremque, eligendi beatae ab maxime adipisci architecto atque fugiat dolorem?</p>
    </footer>

</body>
<script>
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
        console.log(checkKonami);
    });
</script>

</html>