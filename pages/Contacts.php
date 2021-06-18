<?php

session_start();

?>
<!-- Verification de reception et conformite des informations --> 
<?php 

	// les infos ont elles bien ete postees? recuperons les : ne rien faire
	if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['date_de_naissance']) && isset($_POST['telephone']) && isset($_FILES['photo']) && isset($_POST['mail']) && isset($_POST['mot_de_passe']) ){
			//annuler la prise en compte des balises inserees dams les champs
		$nom = htmlspecialchars($_POST['nom']);  
		$prenom = htmlspecialchars($_POST['prenom']);
		$sexe = $_POST['sexe'];
		$nee_le = $_POST['date_de_naissance'];
		$tel_num = htmlspecialchars($_POST['telephone']);
		// $photo = $_POST['photo'];
		$mail = htmlspecialchars($_POST['mail']);
		$psw = htmlspecialchars($_POST['mot_de_passe']);
	}
		//cas particulier de l'image
	if(isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0){ // l'image a bien ete transmise sans erreur
		if ($_FILES['photo']['size'] <= 300145728){		// on defint la taille maximale
			$infosfichier = pathinfo($_FILES['photo']['name']);
        	$extension_upload = $infosfichier['extension'];
        	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		}
	}




	// conformite des valeurs?










?>
	<!-- Definition des parametres de session  -->
	<?php  
		// Parametres de session utiles sur toutes les pages
		$_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $prenom;
		$_SESSION['photo'] = $photo;
	?>

<!-- Connection a la bdd et insertion des donnees-->

<!-- Display de la liste des membres ou Appel d'une page qui le fera -->