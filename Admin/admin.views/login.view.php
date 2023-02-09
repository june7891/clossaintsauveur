<?php ob_start(); ?>


<div class="container-user">
    <div class="d-flex justify-content-center mt-5">
        <div class="user-card">

            <form method="POST" action="<?= URL ?>connection">
            <?php flash('login')?>
                <div class="form-group">
                    <label for="pseudo">Identifiant</label>
                    <input type="text" class="form-control" name="username" id="username">

                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-info mt-3" name="valider">Se connecter</button>
            </form>
        </div>
    </div>
</div>



<?php
$content = ob_get_clean();
$titre = "Login";
require "template-admin.php"; ?>