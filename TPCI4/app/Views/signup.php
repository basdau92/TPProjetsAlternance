<?= $this->extend('Layout\master')?>

<?= $this->section('content')?>

<!-- Titre H1 -->
<h1 class="text-center text-capitalize text-success my-2">formulaire enregistrement</h1>

<!-- Formulaire -->
<form class="row g-3 mx-auto">
  <div class="col-md-6 col-lg-6">
    <label for="lastname" class="label text-success">Nom</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="">
  </div>

  <div class="col-md-6 col-lg-6">
    <label for="firstname" class="label text-success">Prénom</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="">
  </div>

  <div class="col-md-6 col-lg-6">
    <label for="birthdate" class="label text-success">Date de naissance</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate" value="">
  </div>

  <div class="col-md-6 col-lg-6">
    <label for="address" class="label text-success">Adresse</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="ex: 5 rue des Pommiers" value="">
  </div>

  <div class="col-md-6 col-lg-6">
    <label for="phone" class="label text-success">Téléphone</label>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder ="ex: 01 25 25 25 25" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" maxlength="10">
  </div>

  <div class="col-md-6 col-lg-6">
    <label for="service" class="label text-success">Service</label>
    <select id="service" name="service" class="form-select">
        <?php foreach($services as $service) : ?>
            <option value="<?= $service['id'] ?>"><?= $service['servicename'] ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-success">Enregistrer</button>
  </div>
</form>

<?= $this->endSection()?>