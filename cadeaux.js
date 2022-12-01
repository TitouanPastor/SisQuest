// A METTRE DANS TOUTES LES PAGES CONTENANT DES CADEAUX
// LA SESSION S'APPELLE "cadeaux"
// LES IDs DES CADEAUX DOIVENT S'APPELER "cadeauX"

document.getElementById("cadeau1").addEventListener("click", sessionCadeaux("cadeau1"));
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

	if (localStorage.getItem("cadeaux")) {

		tabCheck = localStorage.getItem("cadeaux");
		check = 0;

		while (tabCheck[i] == true){
			check++;
		}
		if(check == 9){
			// implémenter
		}

    	switch (idDuCadeau){
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