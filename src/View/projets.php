<?php require('includes/header.php'); ?>


<div id="page-content" class="container">
    <section id="project">
        <div class="row">
            <div class="col-sm-12">
                <h3><?= $res['titre'] ?></h3>
                <div class="project-content-area">
                    <div id="project-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">

                        <?php  
                            for ($i=1; $i <= $file_count; $i++) { 
                                
                                if($i == 1){
                                    echo '<div class="item active">';
                                }else{
                                    echo '<div class="item">';
                                }
                                echo '<img src="' . 'images/projets/' . $res['id_p'] . '/' . $i . '.jpg" alt="">';
                                echo '</div>';
                            }
                        ?>
                            
                        </div>

                        <a class="left carousel-control" href="#project-slider" role="button" data-slide="prev">
                            <span class="lnr lnr-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#project-slider" role="button" data-slide="next">
                            <span class="lnr lnr-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="row">

                        <div class="col-sm-4">
                            <h4>INFORMATIONS</h4>
                            <div class="project-info">
                                <div class="info">
                                    <p><i class="lnr lnr-user"></i><span>Thémes : <b><?= $res['theme'] ?></b></span></p>
                                </div>
                                <div class="info">
                                    <p><i class="lnr lnr-star"></i><span>Catégorie : <b><?= $categorie_titre ?></b></span></p>
                                </div>
                                <div class="info">
                                    <p><i class="lnr lnr-calendar-full"></i><span>Date : <b><?= $date_fr ?></b></span></p>
                                </div>
                                <div class="info">
                                    <p><i class="lnr fa-clock-o"></i><span> Durée : <b>17 jours (1203 heures)</b></span></p>
                                </div>
                                <div class="info">
                                    <p><i class="lnr lnr-map"></i><span><b><?= $res['type'] ?></b></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <h4>DESCRIPTION DU PROJET</h4>
                            <?= $res['description'] ?>
                        </div>
                        
                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-sm-8">
                            <h4>COMPÉTENCE DU PROJET</h4>
                            <?php 
                                while($cat = $categorie->fetch()){
                                    echo "<p><b>" . $cat['titre'] . "</b> - <span>" . $cat['description'] . "</span></p>";
                                }
                            ?>
                        </div>
                        
                    </div>
                </div>

                
                <div class="pagination">
                    <a href="index.php?page=projets&id=<?= $id_projet-1 ?>" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>PROJET PRÉCÉDENT</span></a>
                     <a href="index.php?page=projets&id=<?= $id_projet+1 ?>" class="btn btn-direction btn-default-filled pull-right"><span>PROJET SUIVANT</span><i class="fa fa-long-arrow-right"></i></a>
                </div>

                <?php 
                    if(isset($_SESSION['connecte']) && !empty($_SESSION['connecte'])){
                ?>
                    <a href="index.php?page=modifier_projet&id=<?= $id_projet ?>" class="btn btn-direction btn-warning-filled"><i class="fa fa-pencil"></i><span>MODIFIER LE PROJET</span></a>
                    <a href="index.php?page=supprimer&type=projets&id=<?= $id_projet ?>" class="btn btn-direction btn-danger-filled pull-right"><span>SUPPRIMER LE PROJET</span><i class="fa fa-trash"></i></a>
                <?php
                    }
                ?>
                

            </div>
            
        </div>
    </section>
    
</div>

<script>
    
    function deletePost($id) {
        var $confirm = window.confirm("Voulez-vous vraiment supprimer ce projet ?");
        if ($confirm) {

            var $url = "index.php?page=supprimer&type=projets&id=" + $id;
            document.location.href = $url;

        }
    }

</script>

<?php require('includes/footer.php'); ?>


<script src="js/preloader.js"></script>


</body>

</html>