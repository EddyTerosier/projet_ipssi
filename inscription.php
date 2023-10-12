<?php
require_once './inc/database.php';
session_start();
$user = $_SESSION["user"] ?? "";
// var_dump($user);
// die();
if ($user) {
    header("location: /profil.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include_once("./inc/head.php"); ?>
  <title>Projet - Chaussures</title>
</head>

<body>
  <!-- HEADER -->
  <?php include_once("./inc/header.php"); ?>
  <!-- FIN HEADER -->

  <!-- auth page content -->
  <div class="auth-page-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center mt-sm-5 mb-4 text-white-50">
            <div>
              <a href="/" class="d-inline-block auth-logo">
                <img src="assets/Addidous.png" alt="logo" height="20" width="200px" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card mt-4">
            <div class="card-body p-4">
              <div class="text-center mt-2">
                <h5 class="text-primary">Inscription</h5>
                <p class="text-muted">Veuillez renseigner vos informations</p>
              </div>
              <div class="p-2 mt-4">
                <form action="inscription_fetch_data.php" method="post">
                  <div class="mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Entrer votre nom"
                      name="lastname" />
                  </div>
                  <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Entrer votre prénom"
                      name="firstname" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="Entrer votre adresse e-mail"
                      name="email" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="password">Mot de passe</label>
                    <div class="position-relative auth-pass-inputgroup mb-3">
                      <input id="password" type="password" class="form-control pe-5 password-input"
                        placeholder="Entrer votre mot de passe" name="password" />
                      <button
                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                        type="button">
                        <i class="ri-eye-fill align-middle"></i>
                      </button>
                    </div>
                    <!-- </div>
                  <div class="mb-3">
                    <label class="form-label" for="password-input">Confirmer mot de passe</label>
                    <div class="position-relative auth-pass-inputgroup mb-3">
                      <input type="password" class="form-control pe-5 password-input"
                        placeholder="Confirmer votre mot de passe" />
                      <button
                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                        type="button">
                        <i class="ri-eye-fill align-middle"></i>
                      </button>
                    </div>
                  </div> -->
                    <div class="mt-4">
                      <button class="btn btn-success w-100 py-4 fs-3" type="submit">S'enregistrer</button>
                    </div>
                </form>
              </div>
            </div>
            <!-- end card body -->
          </div>
          <!-- end card -->

          <div class="mt-4 text-center">
            <p class="mb-0">Vous avez déjà un compte ? <a href="connexion.php"
                class="fw-semibold text-primary text-decoration-underline"> Se connecter </a></p>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end auth page content -->

  <!-- FOOTER -->
  <?php include_once("./inc/footer.php"); ?>
  <!-- FIN FOOTER -->
</body>

</html>