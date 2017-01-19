<?php
/**
 * Created by PhpStorm.
 * User: Yann
 * Date: 18/01/2017
 * Time: 23:27
 */
ob_start();
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/top_neurones/top-neurones/"><img src="img/logo.png" id="logo" alt="logo Centre de pédagogie appliquée" width="auto" height="70" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/top_neurones/top-neurones/">Home</a></li>
                <li><a href="http://localhost/top_neurones/top-neurones/mes-services.php">Mes Services</a></li>
                <li><a href="http://getbootstrap.com/examples/theme/#contact">Séminaires</a></li>
                <li class="dropdown">
                    <a href="http://getbootstrap.com/examples/theme/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://getbootstrap.com/examples/theme/#">Equilibre</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">Le mouvement</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">Vos compétances</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">Choisir la vie</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">L'émotionnalisation</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">Réflexion: l'éducation nationale</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">L'école à deux ans</a></li>
                        <li><a href="http://getbootstrap.com/examples/theme/#">Cerveau humain et reforme scolaire</a></li>
                    </ul>
                </li>
                <li><a href="http://getbootstrap.com/examples/theme/#contact">Livres</a></li>
                <li><a href="http://getbootstrap.com/examples/theme/#contact">Me retrouver</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<?php 


$menu = ob_get_clean();

echo $menu; 

?>