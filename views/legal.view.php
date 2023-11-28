<?php ob_start();
 require_once "languages/" . $_SESSION['lang'] . ".php"; ?>




<h1 class="titles"><?php echo $lang['legal']?></h1>

<div class="container-fluid">
    <div class="m-5 row">
        <div class="col-md-6">
            <h4>Information éditeur</h4>
            <p>Maison d'hôtes Clos Saint Sauveur</p>
            <p>Gabija URMONAITE ROUX</p>
            <p>8 route de la Magdelaine, Saint-Pierre-d'Aurillac</p>
            <p>Siren: </p>
        </div>

        <div class="col-md-6">
            <h4>Création graphique et développement</h4>
            <p>Toma Juneviciute - <a href="https://juunee-concept.com" target="_blank">Juunee Concept | Digital
                    Solutions</a></p>
            <p>SIRET: 97988366700011</p>

            <h4>Hébergement</h4>
            <p>OVH ROUBAIX <br>
                2 Rue Kellermann <br>
                59100 Roubaix</p>
        </div>

    </div>


    <div class="container-fluid">

        <img class="img-fluid" src="assets/images/exterieur.jpeg" alt="Clos Saint Sauveur">

    </div>

    <div class="m-5">

        <h4 class="text-center mb-4"> Conditions d'utilisation du site Internet www.clossaintsauveur.com</h4>
        <p>Le site et chacun des éléments, y compris mais sans limitation les marques, les logos, icônes,
            infographies, photographies, qui le composent sont protégés au titre de la législation internationale
            de la propriété intellectuelle. Les contenus figurant sur le site sont la propriété de Gabija Urmonaite
            Roux. Toute utilisation,
            reproduction ou représentation, par quelque procédé que ce soit, et sur quelque support que ce soit,
            de tout ou partie du site et/ou des éléments qui le composent n'est pas autorisée sans le consentement
            expresse de Gabija Urmonaite Roux.</p>

        <h4 class="text-center mb-4">Données personnelles</h4>
        <p>D'une façon générale, vous pouvez visiter notre site sur Internet sans avoir à décliner votre identité et
            à
            fournir des informations personnelles vous concernant.
            Cependant, nous pouvons parfois vous demander des informations. Par exemple, pour établir une
            correspondance.
        </p>

        <h4 class="text-center mb-4">Liens</h4>
        <p>Le site peut inclure des liens vers d'autres sites Web ou d'autres sources internet. Dans la mesure où
            Clos
            Saint Sauveur ne peut contrôler ces sites et ces sources externes, Clos Saint Sauveur ne peut être tenu
            pour
            responsable de la mise à disposition de ces sites et sources externes, et ne peut supporter aucune
            responsabilité quant au contenu, publicités, produits, services ou tout autre matériel disponible sur ou
            à
            partir de ces sites ou sources externes.</p>
    </div>
</div>





<?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "views/commons/template.php"; ?>