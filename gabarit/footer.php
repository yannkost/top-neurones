<?php
/**
 * Created by PhpStorm.
 * User: Yann
 * Date: 18/01/2017
 * Time: 23:30
 */

 ob_start();
?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3>Plan du site</h3>
                <ul>
                    <li><a>Home</a></li>
                    <li><a>Mes Services</a></li>
                    <li><a>Séminaires</a></li>
                    <li><a>Articles</a></li>
                    <li><a>Livres</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Plan du site</h3>
                <p> © Centre de Pédagogie Appliquée <br />
                    Jean-Pierre Eggerschwyler</p>
            </div>
        </div>
    </div>
</div>



<?php

    $footer = ob_get_clean();
    echo $footer;

?>
