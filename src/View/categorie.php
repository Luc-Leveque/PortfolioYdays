<?php require('includes/header.php'); ?>

<?php

$req = "SELECT * FROM categorie ORDER BY id_cat DESC";
$req = $bdd->query($req);

?>

<!-- content -->

<div id="page-content" class="container">

    <center><h2>Administration - Gerer les catégories</h2></center>

<?php if(isset($_SESSION['message'])){ ?>
    <p class="col-sm-12 al-success"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
<?php } ?>

    <div class="row">
        <center>
            <a href="index.php?page=AjouterCategorie" class="btn btn-success">Ajouter une catégorie</a>
            <a href="index.php?page=projet" class="btn btn-info">Gerer les projets</a>
        </center>
    </div>
    <br><br><br>
    <?php 
        while($res = $req->fetch()){ 
    ?>
    <div class="row">
    <br>
        <div class="col-sm-12">
            <div class="col-sm-1"></div>
            <div class="col-sm-6 projet_title_admin">
                <div class="col-sm-12">#<?= $res['id_cat'] ?> <b><?= $res['titre'] ?></b> - <?= $res['description'] ?></div>

            </div>
            <div class="col-sm-2"><button type="button" class="btn btn-warning" onclick="updateCate(<?= $res['id_cat']?>)">Modifier la catégorie</button></div>
            <div class="col-sm-2"><button type="button" class="btn btn-danger" onclick="deleteCate(<?= $res['id_cat']?>)">Supprimer la catégorie</button></div>
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
    function deleteCate($id) {
        var $confirm = window.confirm("Voulez-vous vraiment supprimer cette catégorie ?");
        if ($confirm) {

            var $url = "index.php?page=supprimer&type=categories&id=" + $id;
            document.location.href = $url;

        }
    }

    function updateCate($id){
        var $url = "index.php?page=ModifierCategorie&id=" + $id;
        document.location.href = $url;
    }

</script>

</body>
</html>