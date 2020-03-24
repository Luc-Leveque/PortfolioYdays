<?php require('includes/header.php'); ?>

<!-- content -->

<div id="page-content" class="container">

    <div class="row contact-area">

        <div class="col-sm-3"></div>
        <div class="col-sm-6 contact-form-area">
            <!-- contact form 1col -->
            <div id="contact-formd">
                <h3 style='text-align: center;'>Connexion</h3>
                <div class="with-errors"><?= $erreur ?></div>
                <form id="contact-form" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="login" placeholder="Identifiant" name="login">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
                    </div>
                    <input name="submit" type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit" value="SE CONNECTER">
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <p class="form-messege"></p>
                    <div class="clearfix"></div>
                </form>
            </div><!-- / contact form 1col -->
        </div><!-- / col-sm-6 -->
    </div><!-- / contact-area -->

</div><!-- / container -->

<!-- / content -->

<?php require('includes/footer.php'); ?>

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>
</html>