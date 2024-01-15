<?php ob_start();
 require_once "languages/" . $_SESSION['lang'] . ".php"; ?>




<h1 class="titles text-center"><?php echo $lang['legal']?></h1>

<div class="container-fluid">
    <div class="m-5 row">
        <div class="col-md-6">
            <h4><?php echo $lang['publisher']?></h4>
            <p><?php echo $lang['legal-name']?></p>
            <p>Gabija URMONAITE ROUX</p>
            <p>8 route de la Magdelaine, Saint-Pierre-d'Aurillac</p>
            <p>SIRET: </p>
        </div>

        <div class="col-md-6">
            <h4><?php echo $lang['web-design']?></h4>
            <p>Toma Juneviciute - <a href="https://juunee-concept.com" target="_blank">Juunee Concept | Digital
                    Solutions</a></p>
            <p>SIRET: 97988366700011</p>

            <h4><?php echo $lang['hosting']?></h4>
            <p>OVH ROUBAIX <br>
                2 Rue Kellermann <br>
                59100 Roubaix</p>
        </div>

    </div>


    <div class="m-5">

        <h4 class="text-center mb-4"><?php echo $lang['legal-conditions']?></h4>
        <p><?php echo $lang['legal-conditions-text']?></p>

        <h4 class="text-center mb-4"><?php echo $lang['personal-data']?></h4>
        <p><?php echo $lang['personal-data-text']?></p>

        <h4 class="text-center mb-4"><?php echo $lang['links']?></h4>
        <p><?php echo $lang['links-text']?></p>
    </div>
</div>





<?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "views/commons/template.php"; ?>