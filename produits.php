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
  <?php include_once("./inc/footer.php"); ?>
  <!-- FIN FOOTER -->
</body>

</html>