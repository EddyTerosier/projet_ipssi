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
    <div class="col-md-6 mx-auto">
      <article>
        <h1 class="text-center fs-1">Créer un produit</h1>
        <!-- FORM CREATION PRODUIT -->
        <form action="produits_fetch_data.php" method="post" enctype="multipart/form-data">
          <label for="nom">Nom : </label>
          <input type="text" name="nom" placeholder="Entrer le nom de votre produit" required>
          <label for="description">Description : </label>
          <textarea cols="30" rows="3" name="description" placeholder="Entrer la description de votre produit" required></textarea>
          <label for="prix">Prix : </label>
          <input type="text" name="prix" placeholder="Entrer le prix de votre produit" required>
          <label for="image">Image : </label>
          <input type="file" name="image" required>
          <button class="mt-3">Créer</button>
        </form>
        <!-- FIN FORM CREATION PRODUIT -->
      </article>
    </div>
  </div>
  <!-- FIN MAIN -->

  <!-- FOOTER -->
  <?php include_once("./inc/footer.php"); ?>
  <!-- FIN FOOTER -->
</body>

</html>