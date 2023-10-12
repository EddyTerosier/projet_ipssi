<?php
session_start();
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include_once("./inc/head.php"); ?>
  <title>Addidous - Accueil</title>
</head>

<body>
  <!-- HEADER -->
  <?php include_once("./inc/header.php") ?>;
  <!-- FIN HEADER -->

  <!-- MAIN -->
  <main>
    <div class="container col-md-12">
      <dialog>
        <article>
          <h3>Validez nos politiques !</h3>
          <p>Veuillez valider nos <a href="politique.php">différentes politiques.</a>.</p>
          <footer>
            <a href="#confirm" class="confirm" role="button">Valider</a>
          </footer>
        </article>
      </dialog>

      <!-- EN-TETE -->
      <div class="d-flex justify-content-around mb-5">
        <section>
          <h2 class="text-center fs-1">A propos de nous ?</h2>
          <br />
          <p>
            Bienvenue chez Addidous, votre destination ultime pour trouver les chaussures parfaites qui allient style,
            confort et qualité. Depuis 2023, nous nous engageons à
            offrir à nos clients une expérience exceptionnelle de shopping pour chaussures. Rejoignez-nous dans cette
            aventure de la mode et de la découverte. Découvrez notre
            collection exceptionnelle de chaussures et trouvez la paire parfaite qui vous accompagnera dans tous vos
            pas. Merci de choisir Addidous pour votre
            shopping de chaussures. Nous sommes impatients de vous servir et de vous faire vivre une expérience de
            shopping inoubliable.
          </p>
        </section>
      </div>
      <hr />
      <!-- FIN EN-TETE -->

      <!-- CARD -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <i class="fa-regular fa-eye text-center fs-1 mt-4"></i>
              <div class="card-body">
                <h5 class="card-title text-center mb-4">Notre histoire</h5>
                <p class="card-text">
                  Fondée par des passionnés de la mode et de la chaussure, Addidous Shoes est née de l'idée que chaque
                  paire de chaussures raconte une histoire unique.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <i class="fa-regular fa-building text-center fs-1 mt-4"></i>
              <div class="card-body">
                <h5 class="card-title text-center mb-4">Expertise</h5>
                <ul>
                  <li>Large sélection</li>
                  <li>Qualité exceptionnelle</li>
                  <li>Livraison rapide</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <i class="fa-regular fa-handshake text-center fs-1 mt-4"></i>
              <div class="card-body">
                <h5 class="card-title text-center mb-4">Notre mission</h5>
                <p class="card-text">
                  Chez Addidous Shoes, notre mission est simple : vous aider à trouver la paire de chaussures parfaite
                  qui correspond à votre style, votre personnalité et votre
                  confort.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN CARDS -->

      <!-- CAROUSEL -->
      <section class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-8">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/banniere-chaussures.jpg" class="d-block w-100" alt="Chaussure 1" />
                </div>
                <div class="carousel-item">
                  <img src="assets/banniere-chaussures.jpg" class="d-block w-100" alt="Chaussure 2" />
                </div>
                <div class="carousel-item">
                  <img src="assets/banniere-chaussures.jpg" class="d-block w-100" alt="Chaussure 3" />
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- FIN CAROUSEL -->
    </div>
  </main>
  <!-- FIN MAIN -->

  <!-- FOOTER -->
  <?php include_once("./inc/footer.php"); ?>
  <!-- FIN FOOTER -->
</body>

</html>