<?php

if($_SESSION['connecte']){
    $admin = '&nbsp; &nbsp; &nbsp; <b><a href="index.php?page=projet">Administration</a></b> - <b><a href="index.php?page=logout">Déconnexion</a></b>';
}else{
    $admin = '&nbsp; &nbsp; &nbsp; <b><a href="index.php?page=login">Connexion</a>';
}

?>

<!-- footer -->
<footer>
    <div class="container">
        <p class="footer-info">© LUC LEVEQUE - PORTFOLIO<?= $admin ?>
            <span class="social pull-right">
                <a href="#x"><i class="fa fa-facebook"></i></a>
                <a href="#x"><i class="fa fa-twitter"></i></a>
                <a href="#x"><i class="fa fa-instagram"></i></a>
            </span>
        </p>
    </div><!-- / container -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>