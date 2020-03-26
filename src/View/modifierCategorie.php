<?php require('includes/header.php'); ?>

<!-- content -->

<div id="page-content" class="container">

    <div class="row contact-area">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 contact-form-area">
            <!-- contact form 1col -->
            <div id="contact-formd">
            <h4><?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?></h4>
                <form id="contact-form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="TITRE DE LA CATEGORIE" name="titre_cate" value="<?= $categorie['titre'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="DESCRIPTION DE LA CATEGORIE" name="desc_cate"><?= $categorie['description'] ?></textarea>
                    </div>
                   
                    <input type="submit" id="form-submit" name="submit" class="btn btn-md btn-primary-filled btn-form-submit" value="MODIFIER LA CATEGORIE">

                    <div class="clearfix"></div>  
                </form>
            </div><!-- / contact form 1col -->
        </div><!-- / col-sm-6 -->
    </div><!-- / contact-area -->

</div><!-- / container -->

<!-- / content -->

<?php require('includes/footer.php'); ?>


<script src="js/preloader.js"></script>
</script>
</body>
</html>