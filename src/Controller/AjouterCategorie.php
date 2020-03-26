<?php


    if(isset($_POST['submit']) && !empty($_POST['submit'])){


        if(isset($_POST['titre_cate']) && !empty($_POST['titre_cate']) && isset($_POST['desc_cate']) && !empty($_POST['desc_cate']) ){

        $titre = addslashes(htmlentities($_POST['titre_cate']));
        $description = addslashes(htmlentities($_POST['desc_cate']));


        $sql = "INSERT INTO categorie (id_cat, titre, description) VALUES (NULL, '$titre', '$description');";
        $sql = $bdd->query($sql);

        $sql = $sql->rowCount();

        if($sql > 0){ 

            header('Location: index.php?page=categorie');

        }else{ $erreur = 'Une erreur est survenue :( réessayer plus tard !'; }

        }else{ $erreur = 'Veuillez remplir tout les champs !'; }
    }

?>

<?php require "src/View/AjouterCategorie.php"; ?>