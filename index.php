<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <script
      defer
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
    <title>Projet - Chaussures</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg d-flex justify-content-around">
        <a href="/"><img src="/assets/Addidous.png" alt="logo" width="150px" /></a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produits.html">Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.html">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Langues</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.html">Admin</a>
          </li>
          <li class="nav-item">
            <a class="darkMode nav-link"> 🌙 / 🌞 </a>
          </li>
        </ul>    
      </nav>
    </header>
    <!-- FIN HEADER -->

    <!-- MAIN -->
    <main>
      <div class="container col-md-12">
        <dialog>
          <article>
            <h3>Validez nos politiques !</h3>
            <p>Veuillez valider nos <a href="politique.html">différentes politiques.</a>.</p>
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
              Bienvenue chez Addidous, votre destination ultime pour trouver les chaussures parfaites qui allient style, confort et qualité. Depuis 2023, nous nous engageons à
              offrir à nos clients une expérience exceptionnelle de shopping pour chaussures. Rejoignez-nous dans cette aventure de la mode et de la découverte. Découvrez notre
              collection exceptionnelle de chaussures et trouvez la paire parfaite qui vous accompagnera dans tous vos pas. Merci de choisir Addidous pour votre
              shopping de chaussures. Nous sommes impatients de vous servir et de vous faire vivre une expérience de shopping inoubliable.
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
                    Fondée par des passionnés de la mode et de la chaussure, Addidous Shoes est née de l'idée que chaque paire de chaussures raconte une histoire unique.
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
                    Chez Addidous Shoes, notre mission est simple : vous aider à trouver la paire de chaussures parfaite qui correspond à votre style, votre personnalité et votre
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
    <footer>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Accueil</a></li>
        <li class="nav-item"><a href="produits.html" class="nav-link px-2 text-muted">Produits</a></li>
        <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Contact</a></li>
        <li class="nav-item"><a href="connexion.html" class="nav-link px-2 text-muted">Connexion</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Langues</a></li>
        <li class="nav-item"><a href="admin.html" class="nav-link px-2 text-muted">Admin</a></li>
      </ul>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="politique.html" class="nav-link px-2 text-muted">Politiques de confidentialités</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cookies</a></li>
      </ul>
      <p class="text-center text-muted">© 2023 Addidous Shoes, Inc</p>
    </footer>
    <!-- FIN FOOTER -->
  </body>
</html>
