document.getElementById("fantin").addEventListener("click", fantin());

nbClicksFantin = 0;

function fantin(){

	nbClicksFantin++;
	if(nbClicksFantin == 13){
		nbClicksFantin = 0;
		// ouvrir video 
	}

}