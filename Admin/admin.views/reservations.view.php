<?php ob_start(); ?>

<h2>Réservations</h2>

<div></div>

<table class="table table-striped table-responsive-md">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Date d'arrivé</th>
            <th scope="col">Date de départ</th>
            <th scope="col">Prix</th>
            <th scope="col" colspan="2">supprimer/modifier</th>

        </tr>
    </thead>
    <?php foreach($reservations as $reservation) : ?>
    <tr>
        <td><?= $reservation['id'] ?></td>
        <td><?= $reservation['name'] ?></td>
        <td><?= $reservation['start'] ?></td>
        <td><?= $reservation['end'] ?></td>
        <td><?= $reservation['price'] ?> / jour</td>
        <td>

            <a href="<?= URL ?>back/catalogue/modification/<?= $reservation['id'] ?>"><button class=" btn btn-warning"
                    type="submit">Modifier</button></a>


        </td>
        <td>
            <form method="post" action="<?= URL ?>css-admin/removeReservation"
                onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                <input type="hidden" name="id" value="<?= $reservation['id'] ?>" />
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>

    <?php endforeach; ?>
    </tbody>
</table>



<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
 Ajouter une réservation
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une réservation</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?= URL ?>css-admin/addReservation">
      <?php flash('reservation')?>
  <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Tarif</label>
    <input type="number" class="form-control" id="price" name="price" min=0 step="0.01">
  </div>
  <div class="mb-3">
    <label for="start" class="form-label">Date d'arrivée</label>
    <input type="date" class="form-control" id="start" name="start" min="<?= date("Y-m-d"); ?>">
  </div>
  <div class="mb-3">
    <label for="end" class="form-label">Date de départ</label>
    <input type="date" class="form-control" id="end" name="end">
  </div>

  <button class="btn btn-primary">Enregistrer</button>
</form>
    </div>
    </div>
  </div>
</div>



<h2>Disponibilités</h2>

<table class="table table-striped table-responsive-md">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date début</th>
            <th scope="col">Date de fin</th>
            <th scope="col">Prix</th>
            <th scope="col" colspan="2">supprimer/modifier</th>

        </tr>
    </thead>
    <?php foreach($disponibilities as $dispo) : ?>
    <tr>
        <td><?= $dispo['id'] ?></td>
        <td><?= $dispo['start'] ?></td>
        <td><?= $dispo['end'] ?></td>
        <td><?= $dispo['price'] ?> / jour</td>
        <td>

            <a href="<?= URL ?>css-admin/modifyDisponibility/<?= $dispo['id'] ?>"><button class=" btn btn-warning"
                    type="submit">Modifier</button></a>


        </td>
        <td>
            <form method="post" action="<?= URL ?>css-admin/removeDisponibility"
                onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                <input type="hidden" name="id" value="<?= $dispo['id'] ?>" />
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>

    <?php endforeach; ?>
    </tbody>
</table>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDisponibilities">
 Ajouter les dates libres
</button>

<!-- Modal -->
<div class="modal fade" id="modalDisponibilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Disponibilités</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?= URL ?>css-admin/addDisponibility">
  <div class="mb-3">
    <label for="price" class="form-label">Tarif</label>
    <input type="number" class="form-control" id="price" name="price" min=0 step="0.01">
  </div>
  <div class="mb-3">
    <label for="start" class="form-label">Date de début</label>
    <input type="date" class="form-control" id="start" name="start" min="<?= date("Y-m-d"); ?>">
  </div>
  <div class="mb-3">
    <label for="end" class="form-label">Date de fin</label>
    <input type="date" class="form-control" id="end" name="end" min="<?= date("Y-m-d"); ?>">
  </div>

  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
    </div>
    </div>
  </div>
</div>


<?php
$content = ob_get_clean();
$titre = "Reservations";
require "template-admin.php"; ?>