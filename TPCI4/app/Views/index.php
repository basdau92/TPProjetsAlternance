<?= $this->extend('Layout\master')?>

<?= $this->section('content')?>

<!-- Titre H1 -->
<h1 class="text-center text-capitalize text-success my-2">liste utilisateurs</h1>

<!-- Tableau d'affichage -->
<table class="table table-bordered table-hover table-striped table-responsive container mx-auto">
  <thead>
    <tr class="table-success">
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone</th>
      <th scope="col">Service</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>
    <tr class="table-warning">
      <td><?=$user->id ?></td>
      <td><?=$user->lastname ?></td>
      <td><?=$user->firstname ?></td>
      <td><?=CalculAge($user->birthdate) ?></td>
      <td><?=$user->address ?></td>
      <td><?=$user->phone ?></td>
      <td><?=$user->servicename ?></td>
    </tr>
    <?php
} ?>
  </tbody>
</table>

<!-- Bouton redirection formulaire inscription -->
<p class="pNotStillRec text-center text-success my-2">Pas encore enregistré(e) ?</p>
<div class="d-flex justify-content-center">
  <a class="redirectLink" href="/signup">Cliquez ici !</a>
</div>

<?= $this->endSection()?>
