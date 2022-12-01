check = 0;
const UP = '38';
const DOWN = '40';
const RIGHT = '38';
const LEFT = '38';
const A = '65';
const B = '66';

document.addEventListener('keypress', (event) => {
    const touche = event.keyCode;
    konamiTab = [UP, UP, DOWN, DOWN, LEFT, RIGHT, LEFT, RIGHT, B, A];

    switch(check) {
        case 0 :
            if (touche == UP) {
                check++;
            }
            break;
        case 1:
            if (touche == UP) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 2:
            if (touche == DOWN) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 3:
            if (touche == DOWN) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 4 :
            if (touche == LEFT) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 5:
            if (touche == RIGHT) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 6:
            if (touche == LEFT) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 7:
            if (touche == RIGHT) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 8:
            if (touche == B) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 9:
            if (touche == A) {
                check++;
            } else {
                check = 0;
            }
            break;
        case 10:
            //KONAMI CODE FAIT !!!!!
            // A IMPLEMENTER
    }
}