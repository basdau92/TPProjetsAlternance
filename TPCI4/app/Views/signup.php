<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>CI4 - Formulaire enregistrement</title>
</head>
<body>

<!-- Titre H1 -->
<h1 class="text-center text-capitalize text-success my-2">formulaire enregistrement</h1>

<!-- Formulaire -->
<form class="row g-3">
  <div class="col-md-6">
    <label for="lastname" class="form-label text-success font-weight-bold">Nom</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="">
  </div>

  <div class="col-md-6">
    <label for="firstname" class="form-label text-success font-weight-bold">Prénom</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="">
  </div>

  <div class="col-md-6">
    <label for="birthdate" class="form-label text-success font-weight-bold">Date de naissance</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate" value="">
  </div>

  <div class="col-12">
    <label for="address" class="form-label text-success font-weight-bold">Adresse</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="ex: 5 rue des Pommiers" value="">
  </div>

  <div class="col-md-6">
    <label for="phone" class="form-label text-success font-weight-bold">Téléphone</label>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder ="01 25 25 25 25" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" maxlength="10">
  </div>

  <div class="col-md-4">
    <label for="service" class="form-label text-success font-weight-bold">Service</label>
    <select id="service" name="service" class="form-select">
        <?php foreach($services as $service) : ?>
            <option value="<?= $service['id'] ?>"><?= $service['servicename'] ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>