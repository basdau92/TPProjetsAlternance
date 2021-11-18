<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../">
    <title>CI4 - Liste Utilisateurs</title>
</head>
<body class="bg-light">

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
<div class="d-flex justify-content-center">
  <button type="button" class="btn btn-success">Pas encore enregistré(e) ? <a href="/signup">Cliquez ici</a> !</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
