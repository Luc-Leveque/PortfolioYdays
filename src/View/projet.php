<?php require('includes/header.php'); ?>

<?php

$req = "SELECT * FROM projet ORDER BY id_p DESC";
$req = $bdd->query($req);

?>

    <!-- content -->

    <div id="page-content" class="container">

        <center><h2>Administration - Gerer les projets</h2></center>

        <?php if(isset($_SESSION['message'])){ ?>
            <p class="col-sm-12 al-success"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php } ?>

        <div class="row">
            <center>
                <a href="index.php?page=ajouter_projet" class="btn btn-success">Ajouter un projet</a>
                <a href="index.php?page=categorie" class="btn btn-info">Gerer les catégories</a>
                <a href="index.php?page=competence" class="btn btn-primary">Gerer les compétences</a>
            </center>
        </div>
        <br><br><br>
        <?php
        while($res = $req->fetch()){

            $mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août",
                "Septembre", "Octobre", "Novembre", "Décembre");

            $date = date("w/d/n/Y/G/i", strtotime($res['date_deb']));
            list($nom_jour, $jour, $mois, $annee, $heure, $minutes) = explode('/', $date);

            $date_fr = $jour . ' ' . $mois_fr[$mois] . ' ' . $annee;

            $categorie = "SELECT * FROM categorie WHERE id_cat = " . $res['id_cat'];
            $categorie = $bdd->query($categorie);
            $categorie = $categorie->fetch();
            $categorie_titre = $categorie['titre'];

            ?>
            <div class="row">
                <br>
                <div class="col-sm-12">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 projet_title_admin">
                        <div class="col-sm-8">#<?= $res['id_p'] ?> <b><?= $res['titre'] ?></b> - <?= $categorie_titre ?></div>
                        <div class="col-sm-4 text-right"><?= ' (' . $date_fr . ')' ?></div>

                    </div>
                    <div class="col-sm-2"><button type="button" class="btn btn-warning" onclick="updatePost(<?= $res['id_p']?>)">Modifier un projet</button></div>
                    <div class="col-sm-2"><button type="button" class="btn btn-danger" onclick="deletePost(<?= $res['id_p']?>)">Supprimer un projet</button></div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-10 border-c">&nbsp;</div>
            </div>
        <?php } ?>

    </div>

<?php require('includes/footer.php'); ?>

    <!-- preloader -->
    <script src="js/preloader.js"></script>


    <script>
        function deletePost($id) {
            var $confirm = window.confirm("Voulez-vous vraiment supprimer ce projet ?");
            if ($confirm) {

                var $url = "index.php?page=supprimer&type=projets&id=" + $id;
                document.location.href = $url;

            }
        }

        function updatePost($id){
            var $url = "index.php?page=modifier_projet&id=" + $id;
            document.location.href = $url;
        }

    </script>

    </body>
    </html><?php
