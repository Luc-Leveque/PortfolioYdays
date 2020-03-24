<?php

function login($login,$password){
    global $bdd;
	$requete = $bdd->prepare("SELECT * FROM users WHERE login =:login AND mdp =:mdp");
    $requete->bindValue(':login', $login, PDO::PARAM_STR);
    $requete->bindValue(':mdp', $password, PDO::PARAM_STR);
    $requete->execute();
    
    return $requete->fetch();
}