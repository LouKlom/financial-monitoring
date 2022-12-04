<?php
$name = $_POST['typename'];


include('bdd.php');

$req = "INSERT INTO `type`(`nom_type`) VALUES ('$name')";
$ex=$link->prepare($req);
$ex->execute();

header('Location: ../newtype.php');


?>