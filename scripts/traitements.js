
	

	// Previsualisation de l'image ******************************************************************************************
	var loadFile = function(event) {
        var profil = document.getElementById('image');
        var conteneur = document.getElementById('Contientimage');
        conteneur.style.display='block';
        profil.src = URL.createObjectURL(event.target.files[0]);
      };

	// traitement du nom  ***************************************************************************************************
		
	var	nom = document.getElementById('nom'),
		alertnom = document.getElementById('alertnom');

	nom.addEventListener('focus', function(){	// on se rassure que les erreurs ne s'affichent pas lorsqu'on est dans le champ.
		alertnom.style.opacity='0';
	});

	nom.addEventListener('blur', testnom);  // on controle la valeur laissee dans le champ
	function testnom(){
		// console.log(nom.value);  //verification du fonctionnement
	 	if(nom.value.length<3){  //test de taille de contenu
	 		alertnom.innerHTML = "Le nom doit avoir au minimum 3 lettres sans les caracteres speciaux tels que @ ou % ...";
	 		alertnom.style.opacity='1';   //penser a le faire avec une duree definie. 
			return false;
		}
		else if(contient_specialchart(nom.value)){  // test de caracteres non indiques
			alertnom.innerHTML = "Le nom doit avoir au minimum 3 lettres sans les caracteres speciaux tels que @ ou % ...";
			alertnom.style.opacity = '1';
			return false;
		}else{
			return true;
		}
	}
	function contient_specialchart(char){
		var special = ['@','!','~','<','>','?',' " '," ' ",'*','(',')','^','%','$','#','&','{','}','[',']',';',];

		for (var i = special.length - 1; i >= 0; i--) { //pour chaque element de special
			for (var id in char) {  // on se rassure qu'il ne soit pas dans char
				if(char[id]==special[i]){
					return true;
				}
			}
		}
		return false;
	}

	// traitement du prenom ************************************************************************
	var	prenom = document.getElementById('prenom'),
		alertprenom = document.getElementById('alertprenom');

	prenom.addEventListener('focus', function(){	// on se rassure que les erreurs ne s'affichent pas lorsqu'on est dans le champ.
		alertprenom.style.opacity='0';
	});

	prenom.addEventListener('blur', testprenom);  // on controle la valeur laissee dans le champ
	function testprenom(){
		// console.log(nom.value);  //verification du fonctionnement
	 	if(prenom.value.length<3){  //test de taille de contenu
	 		alertprenom.innerHTML = "Le prenom doit avoir au minimum 3 lettres sans les caracteres speciaux tels que @ ou % ...";
	 		alertprenom.style.opacity='1';   //penser a le faire avec une duree definie. 
			return false;
		}
		else if(contient_specialchart(prenom.value)){  // test de caracteres non indiques
			alertprenom.innerHTML = "Le prenom doit avoir au minimum 3 lettres sans les caracteres speciaux tels que @ ou % ...";
			alertprenom.style.opacity = '1';
			return false;
		}else{
			return true;
		}
	}

	// traitement du phone number ***********************************************************************
	var phone = document.getElementById('phone'),
		alertphone = document.getElementById('alertphone');

	phone.addEventListener('focus', function(){	// on se rassure que les erreurs ne s'affichent pas lorsqu'on est dans le champ.
		alertphone.style.opacity='0';
	});
		
	phone.addEventListener('blur', testphone);
	function testphone(){
		if ((phone.value%1 != 0) || (phone.value%1 == -0)){  // on se rassure que le champ ne contient que des chiffres.
			alertphone.innerHTML = "Ce champ doit contenir au moins 8 chiffres sans espace ni caracteres tels que '@', '%'' ou '-'";
			alertphone.style.opacity = '1';
			return false;
		}else{
			return true;
		}
		
	}

	// traitement de l'adresse mail *****************************************************************
	var mail = document.getElementById('email');
		alertmail = document.getElementById('alertmail');

	mail.addEventListener('focus', function(){	// on se rassure que les erreurs ne s'affichent pas lorsqu'on est dans le champ.
		alertmail.style.opacity='0';
	});

	mail.addEventListener('blur', testmail);
	function testmail(){
		var mail_indic='0';
		var mail_format=[],mail_ending=[];
		mail_format=['gmail.com','yahoo.com','yahoo.fr','hotmail.com']; // les formats de mail acceptes

		for(var i=0; i<mail.value.length; i++){  // onparcours l'adresse mail saisie pour retrouver le caractere @
			if(mail.value[i]=='@'){		// si @ est reouve on le garde comme indicateur
				mail_indic=mail.value[i];
			}
		}
		
		if(mail_indic=='@'){         
			mail_ending=mail.value.split('@');   //si on a notre indicateur on l'utilise pour separer l'adresse entree en 2 blocks
			
			for (var i = 0; i < mail_format.length; i++) {  // on parcours le tableau des formats de mail.
				console.log(mail_format[i]);
				console.log(mail_format.length);
				if(mail_format[i]==mail_ending[1]){		// on verifie si la partie entree en adresse apres le @ vaut bien l'une des valeurs souhaitee
					return true;
				}
				else if(i==mail_format.length-1 && mail_format[i]!=mail_ending[1]){   // si jusqu'au dernier element des formats on ne trouve rien alors erreur
					alertmail.innerHTML = "Le format de mail attendu est 'exemple@xmail.xxx";
					alertmail.style.opacity='1';
					return false;
				}
			}
		}
		else{ 		// si on n'a pas l'indicateur, l'adresse mail n'est pas valide
			alertmail.innerHTML = "Le format de mail attendu est 'exemple@xmail.xxx";
			alertmail.style.opacity = '1';
			return false;
		}
	}
