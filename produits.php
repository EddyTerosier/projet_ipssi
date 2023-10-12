<?php
session_start();
$user = $_SESSION["user"] ?? "";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include_once("./inc/head.php");?>
  
  <title>Projet - Chaussures</title>
</head>

<body>
  <!-- HEADER -->
  <?php include_once("./inc/header.php"); ?>
  <!-- FIN HEADER -->

  <!-- MAIN -->
  <div class="container mt-5">
    <h1 class="text-center fs-1">Nos Chaussures</h1>
    <div class="col-md-6 mx-auto d-grid">
      <input type="text" id="recherche" class="form-control" placeholder="Rechercher par nom" />

      <!-- FORM CREATION PRODUIT -->
      <a href="./create_product.php" role="button">Créer un produit</a>
      <!-- FIN FORM CREATION PRODUIT -->

    </div>
      <div class="row my-5" id="cartes-chaussures">
        <?php
        require_once './inc/database.php';
        $result = $pdo->prepare("SELECT * FROM chaussures");
        $result->execute();

        while ($chaussure = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-md-4 mb-4">
          <form action="./details_produit.php" method="POST">
            <button class="btnDetails btn btn-link" name="id" value="<?php echo $chaussure['ID'] ?>">
              <div class="card">
                <img src="<?php echo $chaussure['image']; ?>" class="card-img-top" alt="<?php echo $chaussure['name']; ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chaussure['name']; ?></h5>
                  <p class="card-text"><?php echo $chaussure['description']; ?></p>
                  <p class="card-text">Prix : $<?php echo number_format($chaussure['prix'], 2); ?></p>
                </div>
              </div>
            </button>
          </form>
          </div>
        <?php
        }
        ?>
      </div>

    <!-- </a> -->
  </div>
  <!-- FIN MAIN -->

  <!-- FOOTER -->
  <?php include_once("./inc/footer.php"); ?>
  <!-- FIN FOOTER -->
</body>

</html>