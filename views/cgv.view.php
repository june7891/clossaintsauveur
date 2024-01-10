<?php ob_start(); 
 require_once "languages/" . $_SESSION['lang'] . ".php";
?>
<section class="cgv">
    <h1 class="titles text-center"><?php echo $lang['CGV']?></h1>

    <div class="articles-container">

        <p><?php echo $lang['Article-1']?></p>
        <p><?php echo $lang['Article-2']?></p>
        <p><?php echo $lang['Article-3']?></p>
        <p><?php echo $lang['Article-4']?></p>
        <p><?php echo $lang['Article-5']?></p>
        <p><?php echo $lang['Article-6']?></p>
        <p><?php echo $lang['Article-7']?></p>
        <p><?php echo $lang['Article-8']?></p>
        <p><?php echo $lang['Article-9']?></p>
        <p><?php echo $lang['Article-10']?></p>
        <p><?php echo $lang['Article-11']?></p>
        <p><?php echo $lang['Article-12']?></p>
        <p><?php echo $lang['Article-13']?></p>
        <p><?php echo $lang['Article-14']?></p>
        <p><?php echo $lang['Article-15']?></p>
        <p><?php echo $lang['Article-16']?></p>
        <p><?php echo $lang['Article-17']?></p>
        <p><?php echo $lang['Article-18']?></p>
        <p><?php echo $lang['Article-19']?></p>
        <p><?php echo $lang['Article-20']?></p>
        <p><?php echo $lang['Article-21']?></p>
        <p><?php echo $lang['Article-22']?></p>
        <p><?php echo $lang['Article-23']?></p>
        <p><?php echo $lang['Article-24']?></p>
        <p><?php echo $lang['Article-25']?></p>
        <p><?php echo $lang['arrival-cgv']?></p>
        <p><?php echo $lang['departure-cgv']?></p>
    </div>
</section>

<?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "views/commons/template.php"; ?>