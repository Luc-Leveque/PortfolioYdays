<?php

$req = "SELECT * FROM projet ORDER BY id_p DESC";
$req = $bdd->query($req);

$req2 = "SELECT * FROM categorie";
$req2 = $bdd->query($req2);

?>
<?php require('includes/header.php'); ?>

<section id="portfolio" class="info-box w-shadow">
    <div class="container">
        <ul class="portfolio-filter list-inline text-center">
            <li><a href="#" data-group="all" class="active">TOUT</a></li>
            <?php while($res2 = $req2->fetch()){ ?>
                <li><a href="#" data-group="<?= $res2['description'] ?>"><?= $res2['titre'] ?></a></li>
            <?php } ?>
        </ul>
        <ul class="row portfolio list-unstyled lightbox" id="grid">


            <?php while($res = $req->fetch()){

                $categorie = "SELECT * FROM categorie WHERE id_cat = " . $res['id_cat'];
                $categorie = $bdd->query($categorie);
                $categorie = $categorie->fetch();
                $categorie_desc = $categorie['description'];

                ?>
                <li class="col-xs-6 col-md-4 project m-project" data-groups='["<?= $categorie_desc ?>"]'>
                    <div class="img-bg-color primary">
                        <a href="index.php?page=projets&id=<?= $res['id_p'] ?>" class="project-link"></a>
                        <img src="images/projets/<?= $res['id_p'] ?>/1.jpg" alt="">

                        <div class="project-hover-tools">
                            <a href="index.php?page=projets&id=<?= $res['id_p'] ?>" class="view-btn">
                                <i class="lnr lnr-eye"></i>
                            </a>
                            <a href="images/projets/<?= $res['id_p'] ?>/1.jpg" class="open-gallery">
                                <i class="lnr lnr-frame-expand"></i>
                            </a>
                        </div>

                        <div class="project-details">
                            <h5 class="project-title"><?= $res['titre'] ?></h5>
                            <p class="skill"><?= $categorie['titre'] ?></p>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
        </ul>
    </div>

</section>

<?php require('includes/footer.php'); ?>

<script src="js/custom.js"></script>
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
    $('.lightbox').each(function() {
        $(this).magnificPopup({
            delegate: 'a.open-gallery', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });
</script>

<script src="js/preloader.js"></script>

</body>

</html>