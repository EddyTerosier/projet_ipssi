<?php
require_once './inc/database.php';
$result = $pdo->prepare("SELECT * FROM users WHERE id = $id");
$result->execute();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include_once("./inc/head.php"); ?>
  <title>Addidous - Connexion</title>
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
                <h5 class="text-primary">Connexion</h5>
                <p class="text-muted">Veuillez renseigner vos identifiants</p>
              </div>
              <div class="p-2 mt-4">
                <form action="index.html">
                  <div class="mb-3">
                    <label for="username" class="form-label">Adresse e-mail</label>
                    <input type="text" class="form-control" id="username" placeholder="Entrer votre adresse e-mail"
                      value="<?php !empty($_POST['email']) ? $email : "" ?>" />
                  </div>

                  <div class="mb-3">
                    <div class="float-end">
                      <a href="#" class="text-muted">Mot de passe oublié ?</a>
                    </div>
                    <label class="form-label" for="password-input">Mot de passe</label>
                    <div class="position-relative auth-pass-inputgroup mb-3">
                      <input type="password" class="form-control pe-5 password-input"
                        placeholder="Entrer votre mot de passe" />
                      <button
                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                        type="button">
                        <i class="ri-eye-fill align-middle"></i>
                      </button>
                    </div>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check" />
                    <label class="form-check-label" for="auth-remember-check">Se souvenir de moi</label>
                  </div>

                  <div class="mt-4">
                    <button class="btn btn-success w-100 py-4 fs-3" type="submit">Se connecter</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- end card body -->
          </div>
          <!-- end card -->

          <div class="mt-4 text-center">
            <p class="mb-0">Vous n'avez pas de compte ? <a href="inscription.php"
                class="fw-semibold text-primary text-decoration-underline"> S'inscrire </a></p>
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