<?php require_once "languages/" . $_SESSION['lang'] . ".php";
 ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <meta name="description"
        content="Gîte Clos Saint Sauveur, ancien domaine viticole, situé en plein coeur des Côteaux de Saint Macaire (Sud Gironde). Vue imprenable sur le vignoble et la vallée de la Garonne">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#e6e8d4" />
    <meta property="og:title" content="Clos Saint Sauveur - Gîte Sud Gironde">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.clossaintsauveur.com">
    <meta property="og:image" content="https://www.clossaintsauveur.com/assets/images/img-og.jpg">
    <meta property="og:description"
        content="Gîte Clos Saint Sauveur, ancien domaine viticole, situé en plein coeur des Côteaux de Saint Macaire (Sud Gironde). Vue imprenable sur le vignoble et la vallée de la Garonne">
    <link rel="canonical" href="https://www.clossaintsauveur.com/">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8bff0007f7.js" crossorigin="anonymous"></script>
    <title><?php echo $lang['title'] ?></title>
</head>

<body>

    <?php

 include_once 'navbar.view.php';?>


    <div>

        <?= $content ?>
    </div>


    <?php include_once 'footer.view.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>