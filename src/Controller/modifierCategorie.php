<?php

    if(!isset($_GET['id']) || empty($_GET['id'])){
        $_SESSION['message'] = "<span style='color: red'>Erreur !</span>";
        header('Location : index.php?page=categorie');
    }

    $id_cat = $_GET['id'];

    $categorie = "SELECT * FROM categorie WHERE id_cat = " . $id_cat;
    $categorie = $bdd->query($categorie);
    $categorie = $categorie->fetch();

    if(isset($_POST['submit']) && !empty($_POST['submit'])){


        if(isset($_POST['titre_cate']) && !empty($_POST['titre_cate']) && isset($_POST['desc_cate']) && !empty($_POST['desc_cate']) ){

        $titre = addslashes(htmlentities($_POST['titre_cate']));
        $description = addslashes(htmlentities($_POST['desc_cate']));

        $sql = "UPDATE categorie SET titre = '$titre' , description = '$description' WHERE id_cat = " . $id_cat;
        $sql = $bdd->query($sql);

        $sql = $sql->rowCount();

        if($sql > 0){ 

            header('Location: index.php?page=categorie');

        }else{ $erreur = 'Une erreur est survenue :( réessayer plus tard !'; }

        }else{ $erreur = 'Veuillez remplir tout les champs !'; }
    }

?>

<?php require "src/View/modifierCategorie.php"; ?>