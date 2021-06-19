

<?php  
	include('header.php');
?>

	<div class="container-fluid">
		 <div class="col-md-4 col-md-push-4 col-sm-8 col-sm-push-2 col-xs-12 formzone">
		 	<h1>Mon Formulaire d'inscription</h1>

		 	<form id="formulaire" action="Contacts.php" method="POST"  enctype="multipart/form-data">
		 		<p class="avertir" id="alertgeneral">" Veuillez Remplir les champs specifies. "</p>

		 		<p class="element">
		 			<label for="nom"><span class="glyphicon glyphicon-user"></span></label>
		 			<input type="text" id="nom" name="name" required title="Renseignez votre nom ici" placeholder="Votre nom" maxlength="255">
		 		</p>
		 		<p class="avertir" id="alertnom">" Veuillez renseigner votre nom "</p>

		 		<p class="element">
		 			<label for="prenom"><span class="glyphicon glyphicon-user"></span></label>
		 			<input type="text" id="prenom" name="surname" required title="Renseignez votre prenom ici" placeholder="Votre prenom" maxlength="255">
		 		</p>
		 		<p class="avertir" id="alertprenom">" Veuillez renseigner votre prenom "</p>
		 		
		 		<p class="element">
		 			<label><span class="fa fa-transgender"></span><i class="fa-solid fa-restroom"></i></label>
		 			<input type="radio" id="male" name="gender" value="Homme" style="margin-left: 10px;"> <label for="male">Homme</label> 
    				<input type="radio" id="female" name="gender" value="Femme" style="margin-left: 25px;"> <label for="female">Femme</label>
		 		</p>
		 		<p class="conformer">" Just for conformity. "</p>

		 		<p class="element">
		 			<label for="date"><span class="glyphicon glyphicon-time"></span></label>
    				<input type="date" id="date" title="Date de naissance" name="birth" min="01-01-1990" max="31-12-2050" required="">
		 		</p>
		 		<p class="conformer">" Just for conformity. "</p>

		 		<p class="element">
		 			<label for="phone"><span class="glyphicon glyphicon-earphone"></span></label>
  					<!-- <input type="tel" id="phone" name="numero_telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="XXX-XXX-XXX"> -->
		 			<input type="text" id="phone" title="Au moins 8 chiffres" name="phone" required placeholder="Phone Number" minlength="8" maxlength="25">
		 		</p>
		 		<p class="avertir" id="alertphone">" Veuillez renseigner votre numero de telephone "</p>

		 		<p class="element">
		 			<label for="pays"><span class="glyphicon glyphicon-flag"></span></label>
					<select id="pays" name="country" required="" title="Choisissez votre pays">
						<option value="Cameroun" selected="" disabled="">Choix du pays</option>
						<option value="Cameroun">Cameroun</option>
				    	<option value="senegal">Senegal</option>
				    	<option value="Cote d'ivoire">Cote d'ivoire</option>
				    	<option value="Maroc">Maroc</option>
					</select>
		 		</p>
		 		<p class="avertir" id="alertphone">" Veuillez renseigner le nom de votre pays "</p>


		 		<p>
		 			<div class="row">
		 				<div class="col-md-8">
			 				<p class="element">
			 					<label for="myfile"><span class="glyphicon glyphicon-picture"></span></label>
	    						<input style="width: 95px;" type="file" id="myfile" name="picture" placeholder="profil" onchange="loadFile(event)" required="" title="chargez une photo de profil">
			 				</p>
		 				</div>
	    				<div class="col-md-4" id="Contientimage">
	    					<img id="image">
	    				</div>
		 			</div>
		 		</p>

		 		<p class="element">
					<label for="email"><span class="glyphicon glyphicon-envelope"></span></label>
    				<input type="email" id="mail" name="email" title="adresse mail" placeholder="adresse mail" required="">		 		
		 		</p>
		 		<p class="avertir" id="alertmail">" Veuillez renseigner votre adresse mail "</p>

		 		<p class="element">
					<label for="pwd"><span class="glyphicon glyphicon-lock"></span></label>
    				<input type="password" id="pwd" name="access" title="mot de passe" placeholder="mot de passe" required="" maxlength="100">
		 		</p>
		 		<p class="avertir">" Veuillez renseigner votre Mot de passe. "</p>

		 		<div id="submit"><input type="submit" class="btn btn-medium btn-info" value="Envoyer"></div>

		 	</form>

		 </div>
		 <div class="col-md-12" style="text-align: center; background-color: inherit;"><h5>Home Made By K20 The Little Manager.</h5></div>
	</div>

<script type="text/javascript" src="../scripts/traitements.js"></script>

<?php  
	include('footer.php');
?>