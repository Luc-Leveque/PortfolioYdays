<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

$dbname = "portfolioYdays";

try {

    $bdd = new PDO('mysql:host=localhost;dbname=' . $dbname,'root','');

} catch (Exception $e) {

    Echo "Erreur de connexion à la BDD !";
    die();
}

$infos = "SELECT * FROM description";
$infos = $bdd->query($infos);
$infos = $infos->fetch();
?>