<?php  

$nb_projects = "SELECT COUNT(*) as nb FROM projet";
$nb_projects = $bdd->query($nb_projects);
$nb_projects = $nb_projects->fetch();
$nb_projects = $nb_projects['nb'];

$projets = "SELECT * FROM projet ORDER BY id_p DESC LIMIT 0,3";
$projets = $bdd->query($projets);

?>

<?php require('includes/header.php'); ?>

<!-- content -->

<div id="page-content" class="container">
    <div class="section-w-image">
        <div class="row">
            <div class="col-sm-6 about-img"><p></p></div>
            <div class="col-sm-6 col-sm-offset-6 about-description">
                <h4>A PROPOS DE MOI</h4>
                <?=utf8_encode($infos['about']) ?>

                <h4 class="space-top">COMPÉTENCES</h4>
                <p><strong><?= $infos['competence1'] ?></strong> <span class="pull-right"><?= $infos['level1'] ?>%</span></p>
                <div class="progress progress-label">
                    <div class="progress-bar progress-bar-default animated first fadeInLeft" role="progressbar" aria-valuenow="<?= $infos['level1'] ?>" aria-valuemin="0" aria-valuemax="100"  <?="style=width:" . $infos['level1']."%" ?>>
                    </div>
                </div><!-- / progress -->

                <p><strong><?= $infos['competence2'] ?></strong> <span class="pull-right"><?= $infos['level2'] ?>%</span></p>
                <div class="progress progress-label">
                    <div class="progress-bar progress-bar-primary animated second fadeInLeft" role="progressbar" aria-valuenow="<?= $infos['level2'] ?>" aria-valuemin="0" aria-valuemax="100" <?="style=width:" . $infos['level2']."%" ?>>
                    </div>
                </div><!-- / progress -->

                <p><strong><?= $infos['competence3'] ?></strong> <span class="pull-right"><?= $infos['level3'] ?>%</span></p>
                <div class="progress progress-label">
                    <div class="progress-bar progress-bar-success animated third fadeInLeft" role="progressbar" aria-valuenow="<?= $infos['level3'] ?>" aria-valuemin="0" aria-valuemax="100" <?="style=width:" . $infos['level3']."%" ?>>
                    </div>
                </div><!-- / progress -->

                <p><strong><?= $infos['competence4'] ?></strong> <span class="pull-right"><?= $infos['level4'] ?>%</span></p>
                <div class="progress progress-label">
                    <div class="progress-bar progress-bar-info animated fourth fadeInLeft" role="progressbar" aria-valuenow="<?= $infos['level4'] ?>" aria-valuemin="0" aria-valuemax="100" <?="style=width:" . $infos['level4']."%" ?>>
                    </div>
                </div><!-- / progress -->

            </div><!-- / about-description -->
        </div><!-- / row -->
    </div><!-- / section-w-image -->

    <!-- facts 4 col -->
    <section id="facts">
        <div class="row">

            <!-- fact -->
            <div class="col-sm-12 text-center">
                <i class="fact-icon lnr lnr-users"></i>
                <h3 class="timer" id="clients" data-to="<?= $nb_projects ?>" data-speed="1500"><?= $nb_projects ?></h3>
                <h5 class="fact-title">PROJETS</h5>
            </div>
            <!-- / fact -->

            <!-- / fact -->
        </div><!-- / row -->
    </section>
    <!-- / facts 4 col -->

    <!-- team section 4col -->
    <section id="team">
        <h2 class="text-center space-top-2x">DERNIERS PROJETS</h2>
        <p class="text-center space-bottom-2x">LES TROIS DERNIERS PROJETS. EN DEVELOPPEMENT</p>
        <div class="row">

        <?php while($res = $projets->fetch()){ 

            $categorie = "SELECT * FROM categorie WHERE id_cat = " . $res['id_cat'];
            $categorie = $bdd->query($categorie);
            $categorie = $categorie->fetch();
            $categorie_titre = $categorie['titre'];

            $url_image = "images/projets/" . $res['id_p'] . '/1.jpg';

        ?>

            <!-- team-block -->
            <div class="col-sm-4">
                <div class="team block text-center">
                    <a href="index.php?page=projets&id=<?= $res['id_p'] ?>"><img src="<?= $url_image ?>" alt="" style="height: 174px"></a>
                    <div class="team-info-box">
                        <h6><a href="index.php?page=projets&id=<?= $res['id_p'] ?>"><?= $res['titre'] ?></a></h6>
                        <p class="team-role"><?= $categorie_titre ?></p>
                        <p class="social text-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </p>
                    </div><!-- / team-info-box -->
                </div><!-- / team-block -->
            </div><!-- / col-sm-4 -->
            <!-- / team-block -->

        <?php } ?>

        </div><!-- / row -->
    </section>
</div><!-- / container -->

<!-- / content -->

<?php require('includes/footer.php'); ?>

<!-- facts counter -->
<script src="js/jquery.countTo.js"></script>
 <script type="text/javascript">
      $('.timer').countTo({
        refreshInterval: 60,
        formatter: function (value, options) {
          return value.toFixed(options.decimals);
        },
      });
</script>
<!-- / facts counter -->

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>
</html>