<?php
// File used to make the connexion with Database

$link = new PDO('mysql:host=localhost;dbname=suivi', "root", "root", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));






?>