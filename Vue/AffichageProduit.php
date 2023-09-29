<html>
	<head lang = "en" >
	<link type = "text/css" rel = "stylesheet" media = "all" href = "page.css" />
	</head> 
	
	<?php foreach ($tabProduit as $produit){ ?>

	<div class ="produit">
	<?php echo "idProduit : ".$produit['idProduit'].
	"<br> reference : ".$produit['reference'].
	"<br> description : ".$produit['description'].
	"<br> prixTaxIncl : ".$produit['priceTaxIncl']. 
	"<br> prixTaxExcl : ".$produit['priceTaxExcl']. 
	"<br> langue : ".$produit['langue']. 
	"<br> quantity : ".$produit['quantity'];
	?>
	<form  method="POST" action="../Controler/ControlMenu.php">
		<input type="hidden" name="id" value="<?php echo $produit['idProduit']?>">
		<input class="btn" type="submit" name="btn" value="Supprimer">
		<input class="btn" type="submit" name="btn" value="Modifier">
	</form>
	</div>
	<?php } ?>

<html>