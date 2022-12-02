//TOUS LES "JAMAIS" "JE" "NE" "TE" "LAISSERAI" "TOMBER" PRENNENT UNE CLASSE

document.getElementsByClassName("jamais").addEventListener("click", sessionNGGYU("jamais"));
document.getElementsByClassName("je").addEventListener("click", sessionNGGYU("je"));
document.getElementsByClassName("ne").addEventListener("click", sessionNGGYU("ne"));
document.getElementsByClassName("te").addEventListener("click", sessionNGGYU("te"));
document.getElementsByClassName("laisserai").addEventListener("click", sessionNGGYU("laisserai"));
document.getElementsByClassName("tomber").addEventListener("click", sessionNGGYU("tomber"));

	tabNGGYU = [false, false, false, false, false, false];	


function sessionNGGYU(classMotNGGYU) {

	if (localStorage.getItem("motsNGGYU")) {

		tabCheckNGGYU = localStorage.getItem("motsNGGYU");
		checkNGGYU = 0;

		while (tabCheckNGGYU[i] == true){
			check++;
		}
		if(check == 5){
			window.location.href="https://www.youtube.com/watch?v=dQw4w9WgXcQ";
		}

    	switch (classMotNGGYU){
    	case "jamais":
    		tab[0] = true;
    		localStorage.setItem("motsNGGYU", tabNGGYU);
    		break;
    	case "je":
    		tab[1] = true;
    		localStorage.setItem("motsNGGYU", tabNGGYU);
    		break;
    	case "ne":
    		tab[2] = true;
    		localStorage.setItem("motsNGGYU", tabNGGYU);
    		break;
    	case "te":
    		tab[3] = true;
    		localStorage.setItem("motsNGGYU", tabNGGYU);
    		break;
    	case "laisserai":
    		tab[4] = true;
    		localStorage.setItem("motsNGGYU", tabNGGYU);
    		break;
    	case "tomber":
    		tab[5] = true;
    		localStorage.setItem("motsNGGYU", tabNGGYU);
    		break;
    }

}