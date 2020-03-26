<?php

    if(isset($_GET['type']) && !empty($_GET['type'])){

        $type = $_GET['type'];

        if(isset($_GET['id']) && !empty($_GET['id'])){

            $id = $_GET['id'];

            if($type == 'projets'){

                $sql = "DELETE FROM projet WHERE id_p = " . $id;
                $sql = $bdd->query($sql);

                if($sql){

                    function deltree($dossier){
                        if(($dir=opendir($dossier))===false){ return; }
                 
                        while($name=readdir($dir)){
                            if($name==='.' or $name==='..'){ continue;  }

                            $full_name = $dossier.'/'.$name;
                 
                            if(is_dir($full_name)){ 
                                deltree($full_name); 
                            }else{ 
                                unlink($full_name);
                            }
                        }
                 
                        closedir($dir);
                        rmdir($dossier);
                    }
                }

                deltree('images/projets/' . $id);

                $_SESSION['message'] = "<span style='color: green'>Le projet a été supprimé !</span>";
                header('Location: index.php?page=projet');

            }elseif($type == 'categories'){

                $sql = "DELETE FROM categorie WHERE id_cat = " . $id;
                $sql = $bdd->query($sql);
                $_SESSION['message'] = "<span style='color: green'>La catégorie a été supprimé !</span>";
                header('Location: index.php?page=categorie');

            }else{

                header('Location: index.php?page=Accueil');
            }

        }else{
            header('Location: index.php?page=Accueil');
        }


    }else{
        header('Location: index.php?page=Accueil');
    }

?>