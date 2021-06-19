<?php

session_start();

?>
<!-- Verification de reception et conformite des informations --> 
<?php 

	if(isset($_POST)){        // les infos ont elles bien ete postees?
		// print_r($_POST);
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
		 echo "<br><br>bonjour";
        // Testons si l'extension est autorisée
	        $infosfichier = pathinfo($_FILES['picture']['name']);
	        $extension_upload = $infosfichier['extension'];
	        $extensions_autorisees = array('jpg', 'jpeg', 'png');
	        if (in_array($extension_upload, $extensions_autorisees)){
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['picture']['tmp_name'], '../photo_profil/' . basename($_FILES['picture']['name']));
                $photo=$_FILES['picture']['name'];
                // print_r($photo);
                echo "L'envoi a bien été effectué ! <br>";           
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

<!-- Connection a la bdd et insertion des donnees-->
<?php  

	$bdd = new PDO('mysql:host=localhost;dbname=membres_inchgroup','root','',array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );

	//transmission des valeures
		//preparation de la transmission
    $requete = $bdd->prepare( 'INSERT INTO users ( Nom, Prenom, Sexe, date_naissance, numero_telephone, pays, photo, email, password) VALUES(?,?,?,?,?,?,?,?,?)' );
    	//transmission des valeurs
    $requete->execute( array($nom, $prenom, $sexe, $nee_le, $tel_num, $pays, $photo, $mail, $psw)); 

?>
<!-- Display de la liste des membres ou Appel d'une page qui le fera -->
<?php  

include('header.php');

?>
<div class="col-md-6">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ordre</th>
      <th scope="col">Photo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Sexe</th>
      <th scope="col" class="Nophone">Nee le</th>
      <th scope="col" class="Nophone">Nationalite</th>
      <th scope="col" class="Nophone">Telephone</th>
      <th scope="col" class="Nophone Notablette">Email</th>
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
      <td><div><img class=".profilimg" src="../photo_profil/'.$donnees['photo'].'"></div></td>
      <td>'.$donnees['nom'].'</td>
      <td>'.$donnees['prenom'].'</td>
      <td>'.$donnees['sexe'].'</td>
      <td class="Nophone">'.$donnees['date_naissance'].'</td>
      <td class="Nophone">'.$donnees['pays'].'</td>
      <td class="Nophone">'.$donnees['numero_telephone'].'</td>
      <td  class="Nophone Notablette">'.$donnees['email'].'</td>
    </tr>
  
	';
	}
	
// }

?>

  </tbody>
</table>
</div>

<?php   


include('footer.php');
?>