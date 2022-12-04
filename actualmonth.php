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

<?php
// Actual date
$date=date('Y-m');

$req = "SELECT * FROM `depense` WHERE `date_depense` LIKE '%$date%'";
$ex=$link->prepare($req);
$ex->execute();

$tot = 0;

while($row=$ex->fetch())
{
	$tot = $tot+$row['prix_depense'];
}

echo "<fieldset><center><strong>Total expenses of the current month: ".$tot."</strong></center></fieldset>";
?>


</body>
</html>