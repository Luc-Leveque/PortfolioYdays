<?php require('includes/header.php'); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

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
                        <input type="text" class="form-control" placeholder="TITRE DE LA CATEGORIE" name="titre_cate">
                    </div>
                    
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="DESCRIPTION DE LA CATEGORIE" name="desc_cate"></textarea>
                    </div>
                    
                    <input type="submit" id="form-submit" name="submit" class="btn btn-md btn-primary-filled btn-form-submit" value="AJOUTER LA CATEGORIE">

                    <div class="clearfix"></div>  
                </form>
            </div>
        </div>
    </div>

</div>

<?php require('includes/footer.php'); ?>


<script src="js/preloader.js"></script>

</body>
</html>