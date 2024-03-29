<?php ob_start(); ?>


<?php require_once "languages/" . $_SESSION['lang'] . ".php";
 ?>

<header>
    <img class="logo-header" src="<?= URL ?>assets/images/logo-header.svg" alt="logo maison d'hôtes clos saint sauveur">

    <h1 class="title">Clos Saint Sauveur</h1>
    <h2 class="sub-title">Guest house</h2>


    <a href="<?= URL ?>#presentation">
        <div class="scroll-down"><i class="fa-solid fa-chevron-down"></i></div>
    </a>
</header>


<section id="presentation" class="about">
    <div class="presentation mt-4">

        <h2 class="text-center welcome" data-aos="fade-right"><?php echo $lang['welcome']?></h2>


        <p class="mx-3" data-aos="fade-right"><?php echo $lang['description']?></p>

    </div>

</section>

<section id="rooms" class="images mt-5">

    <h2 class="m-4 pt-4 text-center"><?php echo $lang['house']?></h2>
    <p class="m-5"><?php echo $lang['house-description']?></p>


    <div class="img-container">
        <figure class="image">
            <img class="img-fluid" src="assets/images/kitchen-resized.jpg"
                alt="rez-de-chaussée gîte clos saint sauveur">
            <figcaption><?php echo $lang['groundFloor']?></figcaption>
        </figure>
        <figure class="image">
            <img class="img-fluid" src="assets/images/room-green.jpg" alt="chambre une gîte clos saint sauveur">
            <figcaption><?php echo $lang['room1']?></figcaption>
        </figure>
        <figure class="image">
            <img class="img-fluid" src="assets/images/room-2.jpeg" alt="chambre deux gîte clos saint sauveur">
            <figcaption><?php echo $lang['room2']?></figcaption>
        </figure>

    </div>







</section>





<section id="reservation" class="contact mb-5">

    <h2 class="m-4 p-4 text-center"><?php echo $lang['reservations']?></h2>
    <p class="m-5 reservation-text"><?php echo $lang['reservations-description']?></p>

    <div class="row mx-2">
        <div class="col-md-6 pt-5 mb-4">
            <?php include('calendar.view.php')?>

        </div>




        <div class="col-md-6">
            <?php flash('reservation') ?>
            <form action="sendReservationMessage" method="POST" class="m-2">
                <div class="row justify-content-between mb-4">
                    <div class="form-group col-sm-6 flex-column d-flex">
                        <label for="email" class="form-label"><?php echo $lang['email']?></label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            required>
                    </div>
                    <div class="form-group col-sm-6 flex-column d-flex">
                        <label for="name" class="form-label"><?php echo $lang['name']?></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="mb-3 row justify-content-between">
                    <div class="form-group col-sm-6 flex-column d-flex">
                        <label for="phoneNumber" class="form-label"><?php echo $lang['phone']?></label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="form-group col-sm-6 flex-column d-flex">
                        <div class="row justify-content-between">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="startDate" class="form-label"><?php echo $lang['arrival']?></label>
                                <input type="date" class="form-control" id="startDate" name="startDate"
                                    min="<?= date("Y-m-d"); ?>" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="endDate" class="form-label"><?php echo $lang['departure']?></label>
                                <input type="date" class="form-control" id="endDate" name="endDate"
                                    min="<?= date("Y-m-d"); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label"><?php echo $lang['message']?></label>
                    <textarea type="password" class="form-control" id="message" name="message" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <div class="g-recaptcha" data-sitekey="6LdcfyMkAAAAAPiSHM7VyAnRqyt4sYJWxKIy2uIh"></div>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo $lang['send']?></button>
            </form>
        </div>








    </div>



    </div>




</section>

<?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "views/commons/template.php"; ?>