<!DOCTYPE html>
<!-- saved from url=(0047)http://getbootstrap.com/examples/theme/#contact -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Template Papa</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div id="wrapper">
    <!-- Fixed navbar -->
    <?php
        include ('gabarit/menu.php');
    ?>

    <div class="container" role="main">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3" >
                <img src="img/brain.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="auto">
            </div>
        </div>
    </div>

    <div class="container" role="main">
        <h1>Bienvenu au soutien scolaire</h1>
        <div class="row">
            <div class="col-sm-12" >
                <img src="img/page_acceuil.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="auto">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" >
                <p>
                    SOUTIENSCOLAIRE offre un large éventail d'applications et de thérapies pédagogiques. Celle-ci repose sur une application pédagogique de résultats de recherches modernes sur le fonctionnement du cerveau humain.
                    <br><br>
                    Grâce à divers procédés, il est possible de déceler les blocages qui empêchent de bien apprendre et de les défaire afin de mieux réussir à tous les niveaux.
                    <br><br>
                    SOUTIENSCOLAIRE respecte entièrement la personne. Elle permettra à la personne de remplacer des stratégies bloquantes par des stratégies utiles pour qu'elle puisse, en toute liberté, gérer sa vie selon ses propres talents, ses facultés et ses projets, donc de pouvoir améliorer sa vie scolaire, professionnelle, quotidienne et ainsi aussi sa santé, son bonheur.
                </p>
            </div>
        </div>
    </div>

    <div class="container " >
        <div class="row">
            <div class="col-sm-3 img-thumbnail">
                <h2>Equilibres</h2>
                <img src="img/equilibre.png" alt="image equilibre balance">
                <p>Gérez votre stress et gagnez en équilibre personnel et professionnel.</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1 img-thumbnail">
                <h2>Mouvements</h2>
                <img src="img/mouvement.png" alt="image equilibre balance">
                <p>Des simples exercices que tout le monde peut apprendre afin de sortir un maximum de vos capacités.</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1 img-thumbnail">
                <h2>Apprendre</h2>
                <img src="img/competances.png" alt="image equilibre balance">
                <p>Améliorez vos compétences grâce à des procédés adaptés à vos besoins.</p>
            </div>
        </div>

    </div>

   

</div>
<?php
    include('gabarit/footer.php');
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

 
    </body>
</html>
