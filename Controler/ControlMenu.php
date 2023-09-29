<?php

	require('../Model/model.php');
	require('../Vue/Menu.php');

	echo "aaaa";
	$choix = $_POST['btn'];

	if($choix == "Produit"){

		$tabProduit = getProduit();
		require("../Vue/AffichageProduit.php");
	}
	if($choix == "Ajouter"){
		

		require("../Vue/AjoutProduit.php");
		
	}
	if($choix == "Supprimer" ){

		$id = $_POST['id'];
		supprimerProduit($id);
		$tabProduit = getProduit();
		require("../Vue/AffichageProduit.php");
	}
	if($choix == "Modifier" ){

		$id = $_POST['id'];

		$produit = getProduitParID($id);
		echo $produit['idProduit'];
		require("../Vue/ModifierProduit.php");

	}

?>
