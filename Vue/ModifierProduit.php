<html>
	<head lang = "en" >
	<link type = "text/css" rel = "stylesheet" media = "all" href = "page.css" />
	</head> 

	<form  method="POST" action="../Controler/ControlModifier.php">
		<input type="hidden" name="id" value="<?php echo $produit['idProduit']?>">
		reference : <input type="text"  name="reference" value= <?php echo $produit['reference']?>><br>
		description :<input type="text"  name="description" value= "<?php echo $produit['description']?>"><br>
		priceTaxIncl :<input type="text"  name="priceTaxIncl"value= "<?php echo $produit['priceTaxIncl']?>"><br>
		priceTaxExcl : <input type="text"  name="priceTaxExcl"value= "<?php echo $produit['priceTaxExcl']?>"><br>
		idLang :<input type="text"  name="idLang" value= "<?php echo $produit['idLang']?>"><br>
		quantity :<input type="text"  name="quantity" value= "<?php echo $produit['quantity']?>"><br>

		<input class="btn" type="submit" name="btn" value="Modifier">

	</form>