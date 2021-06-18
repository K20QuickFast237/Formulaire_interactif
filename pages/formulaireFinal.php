<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="Inch Group">

	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/font-awesome.css">


	<title>Inch Group</title>

	<style type="text/css">
		div{
			border: 1px solid;
		}
		label{
			width: 100%;
		}
	</style>

</head>
<body>
	<!-- Notre Formulaire -->
	<div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 ">
		<form>
			<!-- zone special inscription -->
			<div class="inscription"  class="" style="background-color: #E8E8E8;">
				<div class=""><span class="glyphicon glyphicon-user"></span><input type="text" name="nom"></div>
				<div class=""><span class="glyphicon glyphicon-user"></span><input type="text" name="prenom"></div>
				<div class="">
					
						<input type="radio" name="sexe" value="H"><span>Homme/Man</span>
						<input type="radio" name="sexe" value="F"><span>Femme/Woman</span>
					
				</div>
				<div class=""><span class="glyphicon glyphicon-calendar"></span><input type="texte" name="date_de_naissance"></div>
				<div class=""><span class="glyphicon glyphicon-earphone"></span><input type="text" name="telephone"></div>
			</div>
			<!-- Zone pour connection -->
			<div id="connection" class="" >
				<div class=""><span class="glyphicon glyphicon-envelope"></span><input type="Email" name="mail"></div>
				<div class=""><span class="glyphicon glyphicon-lock"></span><input type="text" name="mot_de_passe"></div>
			</div>
			<!-- zone special inscription -->
			<div class="inscription">
				<div class="">
					<div class="" style="background-color: #E8E8E8;display: inline-block;">
						 Choisissez une photo de Profil: <span class="glyphicon glyphicon-picture"></span><input type="file" name="photo" id="photo" accept="image/*" onchange="loadFile(event)" required="" >
					</div>
					<div class="" style="background-color: red;display: inline-block;">
						<img id="image" style="height: 50px;">
					</div>
				</div>
			</div>

		</form>

	</div>

<script type="text/javascript">
	// Previsualisation de l'image
	var loadFile = function(event) {
        var profil = document.getElementById('image');
        profil.src = URL.createObjectURL(event.target.files[0]);
      };

    // Recuperation des valeurs des champs

    // display initial     ****************** NE marche pas *****************
    var zoneinscription=document.getElementsByClassName('inscription');
	    // alert(zoneinscription.length);
    	for (var i =0; i < zoneinscription.length; i++) {
    		// zoneinscription[i].style.opacity='1';
    		zoneinscription[i].style.display='block';
    	}

    // recuperation du champ nom
    var nom=document.getElementsByName('nom');
    console.log(nom);
    if(nom.value!=undefine){
    	console.log(nom);
    }
    // traitement du champ nom





  //   nom.addEventListener('change', testnom, false);
  //   // nom.addEventListener('change', testnom);
		// function testnom(){
  //   	alert(nom.value);

		// console.log(nom.value);
		// 	if(nom.value.length<4){
		// 		p_nom.style.display='block';
		// 		console.log("longeur du nom "+nom.value.length);
		// 		return false;
		// 	}
		// 	else{
		// 		console.log("longeur du nom "+nom.value.length+" ok");
		// 		p_nom.style.display='none';
		// 		nom.style.backgroundColor='rgb(232,240,254)';
		// 		return true;
		// 	}
		// }




</script>


</body>
</html>