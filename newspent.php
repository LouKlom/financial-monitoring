<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<title>Get Started</title>
</head>
<body>

<?php
// Include the connexion to database
include('functions/bdd.php'); 
// Include the navigation menu
include('functions/menu.php'); 
?>

<h2>New Spent</h2><hr>

<fieldset>
<form method="post" action="?">
	Type: <select name="type">
			<?php 
			$req_type = "SELECT * FROM `type` ORDER BY `nom_type` ASC";
			$ex_type = $link->prepare($req_type);
			$ex_type->execute();

			while($row=$ex_type->fetch())
			{
				echo "<option value=".$row['nom_type'].">".$row['nom_type']."</option>";
			}
			?>
		</select>
	
	Price: <input type="text" name="price">
	Description: <input type="text" name="description">
	Date: <input type="date" name="date" value="<?php $date = date("Y-m-d"); echo $date; ?>">
	<input type="submit" name="Valider"	value="Valider">

</form>
</fieldset>

<?php
if(isset($_POST['Valider']))
{
	$type=$_POST['type'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$date_spent = $_POST['date'];

	$req="INSERT INTO `depense`(`type_depense`, `prix_depense`, `description_depense`, `date_depense`) VALUES ('$type','$price','$description','$date')";
	$ex=$link->prepare($req);
	$ex->execute();

	echo $req;



	echo "<br><br><fieldset style='background-color:#00ff00;'>";
		echo "<center><strong>New spent: </strong><br>";
		echo "Type: ".$type."<br>";
		echo "Price: ".$price."<br>";
		echo "Description: ".$description."</br>";
		echo "Date: ".$date_spent."</br>";
	echo "</center></fieldset>";
}


?>

</body>
</html>