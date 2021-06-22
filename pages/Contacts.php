<?php

session_start();

?>
<!-- Verification de reception et conformite des informations --> 
<?php 

	if(isset($_POST)){        // les infos ont elles bien ete postees?
	//annuler la prise en compte des balises inserees dams les champs. on recupere les valeurs sans les balises
		$nom = htmlspecialchars($_POST['name']);  
		$prenom = htmlspecialchars($_POST['surname']);
		$sexe = $_POST['gender'];
		$nee_le = $_POST['birth'];
		$tel_num = htmlspecialchars($_POST['phone']);
		$pays = htmlspecialchars($_POST['country']);
		// $photo =  "pour le test";
		$mail = htmlspecialchars($_POST['email']);
		$psw = htmlspecialchars($_POST['access']);
	}
	//cas particulier de l'image
	// print_r($_FILES);
	if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0){
 	// Testons si le fichier n'est pas trop gros
  	if ($_FILES['picture']['size'] <= 300145728){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['picture']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'png');
      if (in_array($extension_upload, $extensions_autorisees)){
        // On peut valider le fichier et le stocker définitivement
        move_uploaded_file($_FILES['picture']['tmp_name'], '../photo_profil/' . basename($_FILES['picture']['name']));
        $photo=$_FILES['picture']['name'];
        // print_r($photo);          
      }
  	}
	}


?>
	<!-- Definition des parametres de session  -->
	<?php  
		//Parametres de session utiles sur toutes les pages
		$_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $prenom;
		$_SESSION['profil_img_name'] = $photo;
	?>

<!-- Connection a la bdd -->
<?php  

	$bdd = new PDO('mysql:host=localhost;dbname=membres_inchgroup','root','',array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );

	//transmission des valeures
		//preparation de la transmission
    $requete = $bdd->prepare( 'INSERT INTO users ( Nom, Prenom, Sexe, date_naissance, numero_telephone, pays, photo, email, password) VALUES(?,?,?,?,?,?,?,?,?)' );
    	//transmission des valeurs
    $requete->execute( array($nom, $prenom, $sexe, $nee_le, $tel_num, $pays, $photo, $mail, $psw)); 

?>
<?php  
	//test de presence de la personne (par son adresse mail) dans la base

		// $req = $bdd->query('SELECT email FROM users');
		// if($donnees=$req->fetch()){
			// for($i=0; $i<count($donnees); $i++) {
				// if($donnees[$i]==$mail){  // si le user est dans la base, on ne fait rien, l'affichage poursuivra juste
				// echo "trouve";
				// }
				// else{		// si le user n'est pas dans la base, on l'enregistre.
				//transmission des valeures
					//preparation de la transmission
    			// $requete = $bdd->prepare( 'INSERT INTO users ( Nom, Prenom, Sexe, date_naissance, numero_telephone, pays, photo, email, password) VALUES(?,?,?,?,?,?,?,?,?)' );
    			//transmission des valeurs
    			// $requete->execute( array($nom, $prenom, $sexe, $nee_le, $tel_num, $pays, $photo, $mail, $psw)); 


				// echo "traitement".$i."<br>";
				// print_r($donnees[$i]);
				// echo "<br>";
				// print_r($mail);
				// }
			// } 
		// } 

	// 	$req->execute(array(':mail_membre'=>$mail));

	// 	$response=$bdd->query('SELECT * FROM jeux_video order by id DESC LIMIT 5');
	// 	echo $donnees['nom'].'--->'.$donnees['possesseur'].'<br>';
	// }

?>
<!-- Display de la liste des membres ou Appel d'une page qui le fera -->
<?php  

include('header.php');

?>
<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles/contact.css">
<div class="row justify-content-center">
<div class="col col-auto col">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ordre</th>
      <th scope="col">Photo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col" class="respo">Sexe</th>
      <th scope="col" class="respo">Nee le</th>
      <th scope="col" class="respo">Nationalite</th>
      <th scope="col" class="respo">Telephone</th>
    </tr>
  </thead>
  <tbody>
<?php  
// on recupere la taille de notre table user en bd (taille)
	$i=0;
	$response = $bdd -> query('SELECT * FROM users ORDER BY ID DESC');   // on selectionne la ligne dont l'id est i;
	while($donnees = $response -> fetch()){
		$i++;
	echo '		
    <tr>
      <th scope="row">'.($i).'</th>
      <td style="height: 80px; width: 80px;">
      	<div style="height: 75px; width: 75px;border:1px solid;background-image: url(../photo_profil/'.$donnees['photo'].');background-size: cover;">
      	
      	</div>
      </td>
      <td>'.$donnees['nom'].'</td>
      <td>'.$donnees['prenom'].'</td>
      <td>'.$donnees['email'].'</td>
      <td class="respo">'.$donnees['sexe'].'</td>
      <td class="respo">'.$donnees['date_naissance'].'</td>
      <td class="respo">'.$donnees['pays'].'</td>
      <td class="respo">'.$donnees['numero_telephone'].'</td>
    </tr>
  
	';
	}

?> 

  </tbody>
</table>
</div>
</div>

<div class="col-md-12" style="text-align: center; background-color: inherit;"><h5>Home Made By K20 The Little Manager.</h5></div>

<?php   


include('footer.php');
?>