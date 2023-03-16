<?php
session_start();
require_once("../include/navbar.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion administrateur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Add New User Modal Start -->

  <div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gestion des utilisateurs</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" action="../src/config.php" method="POST" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="prenom" class="form-control form-control-lg" placeholder="Ajouter le prénom" required>
                <div class="invalid-feedback">Ajouter le prénom de l'utilisateur</div>
              </div>

              <div class="col">
                <input type="text" name="nom" class="form-control form-control-lg" placeholder="Ajouter le nom" required>
                <div class="invalid-feedback">Ajouter le nom de l'utilisateur</div>
              </div>
            </div>

            <div class="mb-3">
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Ajouter le mail" required>
              <div class="invalid-feedback">Ajouter le mail de l'utilisateur</div>
            </div>

            <div class="mb-3">
              <input type="password" name="password" class="form-control form-control-lg" placeholder="Ajouter le mot de passe" required>
              <div class="invalid-feedback">Ajouter le mot de passe de l'utilisateur</div>
            </div>

            <div class="mb-3">
            <select name="role" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option value="0" disabled selected>Choisir le rôle de l'utilisateur</option>
                <option value="2">Administrateur</option>
                <option value="1">Utilisateur</option>
            </select>
            </div>

            <div class="mb-3">
              <input type="submit" value="Ajouter l'utilisateur" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->

  <!-- Edit User Modal Start -->
  <div class="modal fade" tabindex="-1" id="editUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editer l'utilisateur</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="edit-user-form" action="../src/config.php" class="p-2" novalidate>
            <input type="hidden" name="id" id="id">
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="prenom" id="prenom" class="form-control form-control-lg" placeholder="Entrer prénom" required>
                <div class="invalid-feedback">Le prénom est obligatoire</div>
              </div>

              <div class="col">
                <input type="text" name="nom" id="nom" class="form-control form-control-lg" placeholder="Entrer nom" required>
                <div class="invalid-feedback">Le nom est obligatoire</div>
              </div>
            </div>

            <div class="mb-3">
              <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Entrer e-mail" required>
              <div class="invalid-feedback">Le mail est obligatoire</div>
            </div>

            <div class="mb-3">
              <input type="password" name="password" class="form-control form-control-lg" placeholder="Ajouter le mot de passe" required>
              <div class="invalid-feedback">Mot de passe obligatoire</div>
            </div>

            <div class="mb-3">
            <select name="role" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option value="0" disabled selected>Choisir le rôle de l'utilisateur</option>
                <option value="2">Administrateur</option>
                <option value="1">Utilisateur</option>
            </select>
            </div>

            <div class="mb-3">
              <input type="submit" value="Mettre à jour l'utilisateur" class="btn btn-success btn-block btn-lg" id="edit-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit User Modal End -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">Utilisateurs enregistrés</h4>
        </div>
        <div>
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewUserModal">Ajouter un utilisateur</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID utilisateur</th>
                <th>E-mail</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Rôle</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/js/main.js"></script>
</body>

<?php
require_once("../include/footer.php");
?>

</html>