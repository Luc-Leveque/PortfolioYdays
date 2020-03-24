<?php  

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id_projet = $_GET['id'];
}else{
    $id_projet = 1;
}

$req = "SELECT * FROM projet WHERE id_p = " . $id_projet;
$req = $bdd->query($req);
$res = $req->fetch();



$directory = "images/projets/" . $res['id_p'] . "/";

$file_count = 1; $exist = true;

while($exist == true){

    $d = $directory . $file_count . ".jpg";

    if(file_exists($d)){
        $file_count++;
    }else{
        $file_count--;
        $exist = false;
    }
}

if($res) {

  $mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", 
          "Septembre", "Octobre", "Novembre", "Décembre");

  $date = date("w/d/n/Y/G/i", strtotime($res['date_deb']));
  list($nom_jour, $jour, $mois, $annee, $heure, $minutes) = explode('/', $date);
  
  $date_fr = $jour . ' ' . $mois_fr[$mois] . ' ' . $annee;

    $categorie = "SELECT * FROM categorie WHERE id_cat = " . $res['id_cat'];
    $categorie = $bdd->query($categorie);
    $categorie = $categorie->fetch();
    $categorie_titre = $categorie['titre'];

    $categorie = "SELECT * FROM englober e, competence c WHERE e.id_comp = c.id_comp AND e.id_p = " . $res['id_p'];
    $categorie = $bdd->query($categorie);
}
else {
    header('Location: index.php?page=projets');
}

?>