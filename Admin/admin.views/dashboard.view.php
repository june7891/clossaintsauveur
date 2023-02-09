
<?php ob_start();?>

<?php
if(!$_SESSION) {
    header('Location: ' . URL . "css-admin");
}
?>

<h1>Console Admin</h1>

<?php
$content = ob_get_clean();
$titre = "Page accueil admin";
require "template-admin.php";