<?php
$idtype = $_POST['idtype'];


include('bdd.php');

$req = "DELETE FROM `type` WHERE `id_type` = '$idtype'";
$ex=$link->prepare($req);
$ex->execute();

header('Location: ../newtype.php');


?>