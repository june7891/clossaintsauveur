<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard"><img src="<?= URL?>/assets/images/logo.png" alt="logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <?php if(!Security::verifAccessSession()) :?>
                <a class="nav-link" href="<?= URL?>css-admin">Se connecter</a>

                <?php else :?>

                <a class="nav-link" href="<?= URL?>dashboard">Accueil</a>
                <a class="nav-link" href="<?= URL?> reservations">Réservations</a>

                <a class="nav-link" href="<?= URL?> logout">Se déconnecter</a>

                <?php endif?>


            </div>
        </div>
    </div>
</nav>