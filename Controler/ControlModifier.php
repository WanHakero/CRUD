<?php

	require('../Model/model.php');
	require('../Vue/Menu.php');


	$tabProduit = [
		'id' => $_POST['id'],
		'reference' => $_POST['reference'],
		'description' => $_POST['description'],
		'priceTaxIncl' => $_POST['priceTaxIncl'],
		'priceTaxExcl' => $_POST['priceTaxExcl'],
		'idLang' => $_POST['idLang'],
		'quantity' => $_POST['quantity']
	];
	modifProduit($tabProduit);

	?>
