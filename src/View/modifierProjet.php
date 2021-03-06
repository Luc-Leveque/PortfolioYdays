<?php require('includes/header.php'); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!-- content -->

<?php
    
    $categories = "SELECT * FROM categorie";
    $categories = $bdd->query($categories);

    $projet = "SELECT * FROM projet WHERE id_p = " . $id_p;
    $projet = $bdd->query($projet);
    $projet = $projet->fetch();

    $cate = "SELECT * FROM categorie WHERE id_cat = " . $projet['id_cat'];
    $cate = $bdd->query($cate);
    $cate = $cate->fetch();

?>

<div id="page-content" class="container">

    <div class="row contact-area">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 contact-form-area">
            <!-- contact form 1col -->
            <div id="contact-formd">
                <h4><?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?></h4>
                <form id="contact-form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="TITRE DU PROJET" name="titre_p" value="<?= $projet['titre'] ?>"
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="DATE DU PROJET" name="date_p" value="<?= $projet['date_deb'] ?>"
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="DUREE DU PROJET" name="duree_p" value="<?= $projet['duree'] ?>"
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="THEME DU PROJET" name="theme_p" value="<?= $projet['theme'] ?>"
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="TYPE DE PROJET ? SCOLAIRE ? PRO ?" name="type_p" value="<?= $projet['type'] ?>">
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="DESCRIPTION DU PROJET" name="desc_p"><?= $projet['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        Catégorie :
                        <select class="custom-select" name="categorie_p">
                            <?php while($categorie = $categories->fetch()){

                                if($cate['id_cat'] == $categorie['id_cat']){
                                    ?>
                                    <option value="<?= $categorie['id_cat'] ?>" selected><?= $categorie['titre'] ?></option>
                                    <?php
                                }else{
                                    ?>
                                    <option value="<?= $categorie['id_cat'] ?>"><?= $categorie['titre'] ?></option>
                                    <?php
                                }
                                ?>
                            <?php } ?>
                        </select>
                    </div>       
                    <br>
                    <div class="form-group">
                        Ajout de plusieurs images : <br><br>
                        <input type="file" name="images[]" id="image" onclick="addfile()">
                        <input type="file" name="images[]" id="duplicate" class="hidden" onclick="addfile()">
                    </div>
                    <br>
                    <input type="submit" id="form-submit" name="submit" class="btn btn-md btn-primary-filled btn-form-submit" value="AJOUTER LE PROJET">

                    <div class="clearfix"></div>
                </form>
            </div><!-- / contact form 1col -->
        </div><!-- / col-sm-6 -->
    </div><!-- / contact-area -->

</div><!-- / container -->

<!-- / content -->

<?php require('includes/footer.php'); ?>


<script src="js/preloader.js"></script>
<script>
    var addfile = function(){
        var clone =  $('#duplicate').clone().attr('id','').removeClass('hidden');
        console.log(clone);
        $('#duplicate').before(clone);
    }
</script>
</body>
</html>