

<?php  
	include('header.php');
	echo '<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">';
	echo '<link rel="stylesheet" type="text/css" href="../styles/inscription.css">';
?>

	<div class="container-fluid">
		 <div class="col-md-5 col-md-push-4 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1 formzone">
		 	<h1>Mon Formulaire d'inscription</h1>

		 	<form id="formulaire" action="Contacts.php" method="POST"  enctype="multipart/form-data">
		 		<p class="avertir" id="alertgeneral">" Veuillez Remplir les champs specifies. "</p>

		 		<p class="element">
		 			<label for="nom"><span class="glyphicon glyphicon-user"></span></label>
		 			<input type="text" id="nom" name="name" required title="Renseignez votre nom ici" placeholder="Entrez votre nom" maxlength="255">
		 		</p>
		 		<p class="avertir" id="alertnom">" Veuillez renseigner votre nom "</p>

		 		<p class="element">
		 			<label for="prenom"><span class="glyphicon glyphicon-user"></span></label>
		 			<input type="text" id="prenom" name="surname" required title="Renseignez votre prénom ici" placeholder="Entrez votre prénom" maxlength="255">
		 		</p>
		 		<p class="avertir" id="alertprenom">" Veuillez renseigner votre prenom "</p>
		 		
		 		<p class="element">
		 			<label><span class="fa fa-transgender"></span></label>
		 			<input type="radio" id="male" name="gender" value="Homme" style="margin-left: 10px;"> <label for="male">Homme</label> 
    				<input type="radio" id="female" name="gender" value="Femme" style="margin-left: 25px;"> <label for="female">Femme</label>
		 		</p>
		 		<p class="avertir" id="alertsexe">" Veuillez renseigner votre genre "</p>

		 		<p class="element">
		 			<label for="date"><span class="glyphicon glyphicon-time"></span></label>
    				<input type="date" id="date" title="Date de naissance" pattern="(0[1-9]|[12][0-9]|3[01])[/\](0[1-9]|1[012])[/\](19|20)\d\d" name="birth" min="01-01-1990" max="31-12-2050" required="">
		 		</p>
		 		<p class="avertir" id="alertnaissance">" Veuillez renseigner votre date de naissance au format indique. "</p>

		 		<p class="element">
		 			<label for="phone"><span class="glyphicon glyphicon-earphone"></span></label>
  					<!-- <input type="tel" id="phone" name="numero_telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="XXX-XXX-XXX"> -->
		 			<input type="text" id="phone" title="Au moins 8 chiffres" name="phone" required placeholder="Entrez votre numéro de téléphone" minlength="8" maxlength="25">
		 		</p>
		 		<p class="avertir" id="alertphone">" Veuillez renseigner votre numero de telephone "</p>

		 		<p class="element">
		 			<label for="pays"><span class="glyphicon glyphicon-flag"></span></label>
					<select id="pays" name="country" required="" title="Choisissez votre pays">
						<option value="" selected="" disabled="">Choix du pays</option>
						<option value="Cameroun">Cameroun</option>
				    	<option value="senegal">Senegal</option>
				    	<option value="Cote d'ivoire">Cote d'ivoire</option>
				    	<option value="Maroc">Maroc</option>
					</select>
		 		</p>
		 		<p class="avertir" id="alertpays">" Veuillez renseigner le nom de votre pays "</p>

	 			<div class="row">
	 				<div class="col-md-8">
		 				<p class="element">
		 					<label for="myfile"><span class="glyphicon glyphicon-picture"></span></label>
    						<input style="width: 95px; border: 1px solid;" type="file" id="myfile" name="picture" placeholder="profil" onchange="loadFile(event)" required="" title="chargez une photo de profil">
		 				</p>
	 				</div>
    				<div class="col-md-4" id="Contientimage">
    					<img id="image" alt="photo de profil">
    				</div>
	 			</div>
		 		<p class="avertir" id="alertfile">" Veuillez charger une photo pour votre profil "</p>

		 		<p class="element">
					<label for="email"><span class="glyphicon glyphicon-envelope"></span></label>
    				<input type="email" id="mail" name="email" title="adresse mail" placeholder="Entrew votre adresse email" required="">		 		
		 		</p>
		 		<p class="avertir" id="alertmail">" Veuillez renseigner votre adresse mail "</p>

		 		<p class="element">
					<label for="pwd"><span class="glyphicon glyphicon-lock"></span></label>
    				<input type="password" id="pwd" name="access" title="mot de passe" placeholder="Entrew votre mot de passe" required="" maxlength="100">
		 		</p>
		 		<p class="avertir" id="alertpwd">" Veuillez renseigner votre Mot de passe avec au moins 4 caractères. "</p>

		 		<div id="submit" class="btn btn-medium btn-info">Enregistrer</div>

		 	</form>

		 </div>
		 <div class="col-md-12" style="text-align: center; background-color: inherit;"><h5>Home Made By K20 The Little Manager.</h5></div>
	</div>

<script type="text/javascript" src="../scripts/traitements.js"></script>

<?php  
	include('footer.php');
?>