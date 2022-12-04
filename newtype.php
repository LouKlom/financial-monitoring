<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<title>Types</title>
</head>
<body>

<?php
// Include the connexion to database
include('functions/bdd.php'); 
// Include the navigation menu
include('functions/menu.php'); 
?>

<!-- -------------------------------------------------------------------------------- -->
<h2>All Types</h2><hr>
<center><table border="0">
	<tr>
		<td><strong>ID</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Suppr</strong></td>
	</tr>
<?php 
$req = "SELECT * FROM `type`";
$ex = $link->prepare($req);
$ex->execute();


while($rowtype = $ex->fetch())
{
	echo "<tr>";
		echo "<td>".$rowtype['id_type']."</td>";
		echo "<td>".$rowtype['nom_type']."</td>";
		echo "<td><form method=post action=functions/supprtype.php><center>
		<input type='hidden' name='idtype' id='idtype' value='".$rowtype['id_type']."'>
		<input type='submit' name='X' value='X'>
		</center></form></td>";
	echo "</tr>";
}
?>
</table></center>
<!-- ------------------------------------------------------------------------------- -->
<h2>New Type</h2><hr>

<form method="post" action="functions/newtype.php">
	Type's name: <input type="text" name="typename">&nbsp;&nbsp;&nbsp;
	<input type="submit" name="Ok" value="Ok">
</form>


</body>
</html>