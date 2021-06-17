
<?php include("header.php") ?>

	<!-- Notre Formulaire -->
	<div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 ">
		<form action="" method="POST">
			<div id="inscription">
				<label>Nom</label>
				<input type="text" name="nom" class="form-control">
				<label>Prenom</label>
				<input type="text" name="prenom" class="form-control">
				<label>Sexe</label>
				<input type="radio" name="sexe" value="H"><span>Homme/Man</span>
				<input type="radio" name="sexe" value="F"><span>Femme/Woman</span>
				<label>Date</label>
				<input type="date" name="date de naissance" class="form-control">
				<label>Telephone</label>
				<input type="text" name="telephone" class="form-control">
				<label>Choisissez votre photo de Profil</label>
				<input type="file" name="photo">
			</div>
			<label>Mail</label>
			<input type="Email" name="mail" class="form-control">
			<label>Mot de Passe</label>
			<input type="text" name="mot_de_passe" class="form-control">
		</form>
	</div>

<?php include "footer.php" ?>
