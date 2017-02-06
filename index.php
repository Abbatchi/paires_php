<?php
	$tab = array("img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg");
	$dos = 'img/dos.png';
	shuffle($tab); //Mélange tableau
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jeux-des-paires</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript"> 
		var tab = 	[ <?php
			foreach ($tab as $index => $case) {

				echo '"'. $case . '"';
					if ($index != 13){
						echo ',';
					}
			}?>
					];
 		
	</script>
</head>

	<body>

		<div id="titre">
			<h1>JEU DES PAIRES</h1>
		</div>
		<p>Règles du jeu: Afficher toutes les paires pour gagner</p>
		<p>Vous avez trouvé <span id="paires">0</span> paires cachées</p>
		<span id="chronotime">00:00</span>
		<div id="photo"> 

		 	<!--ici PHP--> 

			<?php

			for($i=0; $i<=count($tab) -1 ; $i++) { //Boucle pour afficher 14 fois les photos de dos
					echo "<img src=" . $dos . " class='photo' onclick='choisir(" . $i . ")' draggable='false'>";
					//écriture des balises images pour l'affichage de dos'
			}
			?>

 			<!--ici javascript--> 

			<script type="text/javascript" src="js/script.js"></script>
		</div>
	</body>
</html>