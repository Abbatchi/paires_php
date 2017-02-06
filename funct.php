<?php

$tab = array("img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", 
"img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", 
"img/lionne.jpg", "img/ours.jpg");
$dos = 'img/dos.png';
$clique = 0;
$paires = 0;
$choixun;
$choixdeux;
$norepeat = true;

shuffle($tab);

for($i=0; $i<=count($tab) -1 ; $i++) {
		echo "<img class='photo' src=" . $dos . ">";
	}

	//for($i=0; $i<=count($tab) -1 ; $i++) {
		//echo "<img class='photo' onClick='choisir()' src=" . $tab[$i] . ">";
	//}













?>