<html>
	<head lang = "en" >
	<link type = "text/css" rel = "stylesheet" media = "all" href = "page.css" />
	</head> 

	<form  method="POST" action="../Controler/ControlAjouter.php">
		reference : <input type="text"  name="reference"><br>
		description :<input type="text"  name="description"><br>
		priceTaxIncl :<input type="text"  name="priceTaxIncl"><br>
		priceTaxExcl : <input type="text"  name="priceTaxExcl"><br>
		idLang :<input type="text"  name="idLang"><br>
		quantity :<input type="text"  name="quantity"><br>

		<input class="btn" type="submit" name="btn" value="Ajouter">

	</form>