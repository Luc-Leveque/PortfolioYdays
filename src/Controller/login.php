<?php
$erreur = '';

require "src/Model/authentification.php";

if(isset($_POST['submit']) && !empty($_POST['submit'])) {

    if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {

        $login = htmlentities($_POST['login']);
        $password = sha1(htmlentities($_POST['password']));
        

        if($reponse = login($login,$password)) {
            $_SESSION['connecte'] = true;
            $_SESSION['id_u'] = $reponse['id_u'];

            header('Location: index.php');
        } else {
            $erreur = 'Erreur Mot de passe ou Identifiant incorrect ! ';

        }

    } else { 
        $erreur = "Erreur ! Veuillez saisir tout les champs !";  
    }
}

if(isset($erreur) && !empty($erreur)){
    $erreur = "Erreur";
}else{
    $erreur = "";
}

?>
<?php require "src/View/login.php"; ?>