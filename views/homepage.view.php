
   
<?php ob_start(); ?>



      <header>
        <img data-aos="fade-right" src="assets/images/tree.png" alt="">
        <h1 data-aos="fade-right">Clos Saint Sauveur <br> <span>Guest House</span> </h1>
       
        <a href="<?= URL ?>#presentation"><div class="scroll-down"><i class="fa-solid fa-chevron-down"></i></div></a>
      </header>


      <section id="presentation" class="about">
        <div class="presentation">
           <?php if ($_GET['lang'] == 'fr'): ?>
          <h2 class="text-center" data-aos="fade-right">Bienvenue <br> au Clos Saint Sauveur</h2>

         
        <p class="text-center mx-3"  data-aos="fade-right">Clos Saint Sauveur, ancien Domaine viticole, est situé en plein coeur des Côteaux de
          Saint Macaire (Gironde). Vue imprenable sur le vignoble et la vallée de la Garonne. Notre
          demeure est à 10 minutes de la sortie d&#39;Autoroute de Langon, 40 minutes de Bordeaux,
          40 minutes de Saint-Emilion et 1h15 de l&#39;Océan Atlantique. Terrasse couverte sous un
          ancien pigeonnier et terrain arboré avec un pin parasol centenaire. Tranquillité et
          quiétude assurées dans un environnent idyllique.</p>
          <?php else : ?>

            <h2 class="text-center" data-aos="fade-right">Welcome <br> to Clos Saint Sauveur</h2>
            <p>Clos Saint Sauveur, former vineyard, is located in the heart of the Coteaux de Saint
Macaire in the Gironde.
The view over the surrounding vines and Garonne river valley is unrivalled.
Our property is located just ten minutes from the Langon exit on the Autoroute, 40
minutes from Bordeaux, 40 minutes from Saint-Emilion and one hour and fifteen
minutes from the Atlantic coast.
The tree-lined garden includes a covered terrace made from a former dovecote and a
100-year-old stone pine tree.
An idyllic spot for calm and quiet holidays.</p>

            <?php endif?>
        </div>
        
      </section>

      <section id="rooms" class="images mt-5">

      <?php if ($_GET['lang'] == 'fr'): ?>
        <h2 class="m-4 pt-4 text-center">Logement</h2>
        <p class="m-5 text-center">Maison de 95 m² avec accès indépendant et grand parking privatif.
          Logement sur 2 niveaux avec 2 chambres spacieuses de 19 m² et 13 m² aménagées de
          literies grand confort, palier avec bureau, wc et salle de bain. 
          Au rez-de-chaussée, grand pièce de vie de 40 m² avec cuisine toute équipée.
          Logement climatisé dans son intégralité. <br> Belles promenades à pied et gare à 5 minutes reliant Bordeaux en 30 minutes.  Idéal pour les amoureux de footing et de randonnée!</p>
        
        
        
        
          <div class="container">
              <figure class="image">
              <img class="img-fluid" src="assets/images/1stfloor.webp" alt="rdc" data-mdb-img="/assets/images/1stfloor.JPG">
              <figcaption>Rdc, pièce de vie de 40m² avec cuisine équipée</figcaption>
             </figure>
              <figure class="image">
              <img class="img-fluid" src="assets/images/room-green.webp" alt="room1">
              <figcaption>Chambre 1 : 1 très grand lit double</figcaption>
             </figure>
              <figure class="image">
              <img class="img-fluid" src="assets/images/room-red.webp" alt="room2">
              <figcaption>Chambre 2 : 2 lits simple</figcaption>
             </figure>
        
        </div>

        <?php else : ?>

          <h2 class="m-4 pt-4 text-center">The House</h2>
        <p class="m-5 text-center">The house is 95 sq. metres (1022 sq. ft.) spread over two levels, with a private entrance
and a large private parking. The upper story offers two large bedrooms of 19 m2 and 13 m2 (204 sq. ft and 140 sq.
ft.) with comfortable bedding. A desk on the landing ensures a separate space for
teleworking. There is also a full bathroom with a shower and washing machine and WC.
On the ground floor you will find a large living space open to the full equipped kitchen
and a second WC. The entire home is fully air conditioned. <br> Beautiful walking and hiking trails are within walking distance of the property. A nearby
train station (a 5 minutes drive) will connect you to Bordeaux in just 30 minutes.
It is an ideal spot for running and hiking lovers.</p>
        
        
        
        
          <div class="container">
              <figure class="image">
              <img class="img-fluid" src="assets/images/1stfloor.webp" alt="rdc" data-mdb-img="/assets/images/1stfloor.JPG">
              <figcaption>Ground floor, large living space, fully equipped kitchen</figcaption>
             </figure>
              <figure class="image">
              <img class="img-fluid" src="assets/images/room-green.webp" alt="room1">
              <figcaption>Room 1 : queen size bed</figcaption>
             </figure>
              <figure class="image">
              <img class="img-fluid" src="assets/images/room-red.webp" alt="room2">
              <figcaption>Chambre 2 : two twin beds</figcaption>
             </figure>
        
        </div>

        <?php endif?>
      </section>


     


    <section id="reservation" class="contact mx-5">
    <?php if ($_GET['lang'] == 'fr'): ?>
        <h2 class="m-4 p-4 text-center">Réservation</h2>
        <p class="mx-5 text-center reservation-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae consequatur esse quas repellendus quo accusantium labore laboriosam quidem totam? Ex voluptatem ea sunt sed eum at esse eos id?</p>
        <div class="row">
                <div class="col-md-7">
                  <?php flash('reservation') ?>
                    <form action="sendReservationMessage" method="POST" class="m-5 w-75 ">
                        <div class="row justify-content-between">
                          <div class="form-group col-sm-6 flex-column d-flex">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                          </div>
                      <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="name" class="form-label">Nom Prénom</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                               </div> 
                        </div>
                        <div class="mb-3 row justify-content-between">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="phoneNumber" class="form-label">N° de téléphone</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                          <div class="row justify-content-between">
                          <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="startDate" class="form-label">Date d'arrivée</label>
                            <input type="date" class="form-control" id="startDate" name="startDate" min="<?= date("Y-m-d"); ?>" required>
                          </div>
                          <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="endDate" class="form-label">Date de départ</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" min="<?= date("Y-m-d"); ?>" required>
                          </div>
                         </div>   
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="password" class="form-control" id="message" name="message" required></textarea>
                        </div>
                          <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdcfyMkAAAAAPiSHM7VyAnRqyt4sYJWxKIy2uIh"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>






              <div class="col-md-5 pt-5">

               <?php include('calendar.view.php')?>
              </div>
              </div>

              <?php else : ?>

                <h2 class="m-4 p-4 text-center">Reservations</h2>
        <p class="mx-5 text-center reservation-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quae consequatur esse quas repellendus quo accusantium labore laboriosam quidem totam? Ex voluptatem ea sunt sed eum at esse eos id?</p>
        <div class="row">
                <div class="col-md-7">
                  <?php flash('reservation') ?>
                    <form action="sendReservationMessage" method="POST" class="m-5 w-75 ">
                        <div class="row justify-content-between">
                          <div class="form-group col-sm-6 flex-column d-flex">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                          </div>
                      <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="name" class="form-label">Lastname Firstname</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                               </div> 
                        </div>
                        <div class="mb-3 row justify-content-between">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="phoneNumber" class="form-label">Phone number</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                          <div class="row justify-content-between">
                          <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="startDate" class="form-label">Arrival</label>
                            <input type="date" class="form-control" id="startDate" name="startDate" min="<?= date("Y-m-d"); ?>" required>
                          </div>
                          <div class="form-group col-sm-6 flex-column d-flex">
                            <label for="endDate" class="form-label">Departure</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" min="<?= date("Y-m-d"); ?>" required>
                          </div>
                         </div>   
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="password" class="form-control" id="message" name="message" required></textarea>
                        </div>
                          <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdcfyMkAAAAAPiSHM7VyAnRqyt4sYJWxKIy2uIh"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>






              <div class="col-md-5 pt-5">

               <?php include('calendar.view.php')?>
              </div>
              </div>

              <?php endif?>


    </section>

    <?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "views/commons/template.php"; ?>