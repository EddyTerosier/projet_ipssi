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
        </ul>
      </nav>
    </header>
    <!-- FIN HEADER -->

    <!-- MAIN -->
    <div class="container mt-5">
      <h1 class="text-center fs-1">Nos Chaussures</h1>
      <div class="col-md-6 mx-auto">
        <input type="text" id="recherche" class="form-control" placeholder="Rechercher par nom" />
      </div>
      <div class="row my-5" id="cartes-chaussures">
        <!-- Les cartes seront générées dynamiquement ici -->
      </div>
    </div>
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