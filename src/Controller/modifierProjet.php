<?php 


function upload_image($name, $link ,$new_nom, $indice){

    if(!is_dir($link)){ mkdir($link); }

    if ($_FILES[$name]['error'][$indice] > 0) $erreur = "Erreur lors du transfert";
    if ($_FILES[$name]['size'][$indice] > 3000000) $erreur = "Le fichier est trop gros";

    $extensions_valides = array('jpg','jpeg','gif','png');
    $extension_upload = strtolower(  substr(  strrchr($_FILES[$name]['name'][$indice],'.'),1)  );

    $url_img = $link . "/" . $new_nom;

    if (in_array($extension_upload,$extensions_valides) ){
        return move_uploaded_file($_FILES[$name]['tmp_name'][$indice], $url_img);
    }else{ 
        return false;
    }
}


if(!isset($_GET['id']) || empty($_GET['id'])){
    $_SESSION['message'] = "<span style='color: red'>Erreur !</span>";
    header('Location : index.php?page=Admin');
}

$id_p = $_GET['id'];


if(isset($_POST['submit']) && !empty($_POST['submit'])){


    if(isset($_POST['titre_p']) && !empty($_POST['titre_p']) && isset($_POST['date_p']) && !empty($_POST['date_p']) && isset($_POST['duree_p']) && !empty($_POST['duree_p']) && isset($_POST['theme_p']) && !empty($_POST['theme_p']) && isset($_POST['type_p']) && !empty($_POST['type_p']) && isset($_POST['desc_p']) && !empty($_POST['desc_p']) && isset($_POST['categorie_p']) && !empty($_POST['categorie_p'])){

        $titre          = addslashes(htmlentities($_POST['titre_p']));
        $description    = addslashes(htmlentities($_POST['desc_p']));
        $date           = addslashes(htmlentities($_POST['date_p']));
        $duree          = addslashes(htmlentities($_POST['duree_p']));
        $theme          = addslashes(htmlentities($_POST['theme_p']));
        $type           = addslashes(htmlentities($_POST['type_p']));
        $desc           = addslashes(htmlentities($_POST['desc_p']));
        $categorie      = addslashes(htmlentities($_POST['categorie_p']));

        $sql = "UPDATE projet SET titre = '$titre' , description = '$description' , date_deb = '$date' , duree = '$duree' , id_cat = '$categorie' , theme = '$theme' , type = '$type' WHERE id_p = " . $id_p;
        $sql = $bdd->query($sql);

        $res = $id_p;
        $sql = $sql->rowCount();

        if($sql > 0){

            for ($i=0; $i < (sizeof($_FILES['images']['name']) - 2); $i++) {

                $name = 'images';
                $link = 'images/projets/' . $res;
                $new_nom = ($i+1) . '.jpg';

                upload_image($name, $link, $new_nom, $i);
            }

            header('Location: index.php?page=projets&id=' . $res);

        }else{ 
            $erreur = 'Une erreur est survenue :( réessayer plus tard !'; 
        }

    } else {
         $erreur = 'Veuillez remplir tout les champs !'; 
        }
}

?>
<?php require "src/View/modifierProjet.php"; ?>