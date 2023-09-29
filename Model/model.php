<?php
	
function conexionBDD(){
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";

	$connexion = new PDO("mysql:host=".$servername.";dbname=crud;charset=utf8", $username, $password);

	if (!$connexion) {
	  echo"Conexion FAUX: ";
	}
	echo "Conexion VRAI";
	return $connexion;
}

function getProduit(){
	$bdd = conexionBDD();
	$requete ="SELECT idProduit,reference,description,priceTaxIncl,priceTaxExcl,quantity,langue FROM produit P,langue L WHERE P.idLang = L.idLang";
	$listeProduit = $bdd-> query($requete);
	
	$tabProduit = array();
	while($ligne = $listeProduit->fetch()){
		$tabProduit[]=$ligne;
	}
	return $tabProduit;

}
function getProduitParID($id){
	$bdd = conexionBDD();
	
	$requete ="SELECT idProduit,reference,description,priceTaxIncl,priceTaxExcl,quantity,idLang FROM produit WHERE `idProduit` = ".$id ;
	ECHO $requete;
	$produitID = $bdd ->query($requete);
	$ligne = $produitID->fetch();
	
	
	return $ligne  ;
}


function supprimerProduit($id){
	$bdd = conexionBDD();
	$requete ="DELETE FROM produit WHERE `idProduit` = ".$id;
	$bdd ->query($requete);
}

function ajoutProduit($tabProduit){
	$bdd = conexionBDD();
	$requete="INSERT INTO produit(reference,description,priceTaxIncl,priceTaxExcl,idLang,quantity) 
	VALUE ('".$tabProduit['reference']."', '".$tabProduit['description']."', '".$tabProduit['priceTaxIncl']."','".$tabProduit['priceTaxExcl']."','".$tabProduit['idLang']."','".$tabProduit['quantity']."')";
	echo $requete;
	$bdd ->query($requete);
};

function modifProduit($tabProduit){
	$bdd = conexionBDD();
	$requete="UPDATE produit
			SET  reference = '".$tabProduit['reference']."', 
			description = '".$tabProduit['description']."', 
			priceTaxIncl = '".$tabProduit['priceTaxIncl']."',
			priceTaxExcl = '".$tabProduit['priceTaxExcl']."',
			idLang = '".$tabProduit['idLang']."',
			quantity = '".$tabProduit['quantity']."'
			WHERE `idProduit` = ".$tabProduit['id'];
	$bdd ->query($requete);
}
?>