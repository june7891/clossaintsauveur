<?php ob_start(); ?>



<h2 class="m-5">Tarifs</h2>

<table class="table table-striped table-responsive-md w-50 mx-auto">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Saison</th>
            <th scope="col">Tarif</th>
            <th scope="col">Supprimer</th>

        </tr>
    </thead>
    <?php foreach($prices as $price) : ?>
    <tr>
        <td><?= $price['id'] ?></td>
        <td><?= $price['season'] ?></td>
        <td><?= $price['price'] ?></td>

    </tr>

    <?php endforeach; ?>
    </tbody>
</table>

<div class="d-flex justify-content-center">
  <button type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#modalDisponibilities">
 Ajouter les réservations
</button>
</div>


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
      <form method="POST" action="<?= URL ?>addDisponibility">
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


<!-- Modal Modification -->
<!-- <div class="modal fade" id="modalModification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modifier les disponibilités</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?= URL ?>modifyDisponibility/<?= $dispo['id'] ?>">
  <div class="mb-3">
    <label for="price" class="form-label">Tarif</label>
    <input type="number" class="form-control" id="price" name="price" min=0 step="0.01"  placeholder="<?php echo $dispo['price'] ?>">
  </div>
  <div class="mb-3">
    <label for="start" class="form-label">Date de début</label>
    <input type="date" class="form-control" id="start" name="start" min="<?= date("Y-m-d"); ?>">
  </div>
  <div class="mb-3">
    <label for="end" class="form-label">Date de fin</label>
    <input type="date" class="form-control" id="end" name="end" min="<?= date("Y-m-d"); ?>">
  </div>

  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
    </div>
    </div>
  </div>
</div> -->


<?php
$content = ob_get_clean();
$titre = "Reservations";
require "template-admin.php"; ?>