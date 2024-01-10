<nav class="navbar navbar-expand-md navbar-light" id="navbar">


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="navbarNav">

        <ul class="languages-container col-md-2 justify-content-center mx-1">
            <li class="nav-item px-1">
                <a class="nav-link" href="<?= URL ?>?lang=fr"><img class="language" src="assets/images/fr.png"
                        alt="french"></a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link" href="<?= URL ?>?lang=en"><img class="language" src="assets/images/en.png"
                        alt="english"></a>
            </li>
        </ul>

        <ul class="navbar-nav col-md-8 justify-content-center">
            <li class="nav-item mt-4">
                <a class="nav-link" aria-current="page" href="/"><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item mt-4">
                <a class="nav-link" href="<?= URL ?>#presentation"><?php echo $lang['presentation'] ?></a>
            </li>
            <li>
                <a class="navbar-brand" href="<?= URL ?>"><img class="mx-2" src="assets/images/logo.png" alt="logo"></a>
            </li>
            <li class="nav-item mt-4">
                <a class="nav-link" href="<?= URL ?>#rooms"><?php echo $lang['house'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-4" href="<?= URL ?>#reservation"><?php echo $lang['reservations'] ?></a>
            </li>

        </ul>

    </div>

</nav>