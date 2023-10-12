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
    <h1 class="text-center fs-1"> Details </h1>
      <div class="my-5 d-flex justify-content-center" id="cartes-chaussures">
        <?php
        require_once './inc/database.php';
        $result = $pdo->prepare("SELECT * FROM chaussures WHERE id = :id");
        $result->bindValue("id", $_POST["id"]);
        $result->execute();

        while ($chaussure = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-md-6">
          <div class="card text-center">
            <div class="card-body">
              <img src="<?php echo $chaussure['image']; ?>" class="card-img-top img-fluid" alt="<?php echo $chaussure['name']; ?>">
              <hr>
              <h5 class="card-title"><?php echo $chaussure['name']; ?></h5>
              <p class="card-text"><?php echo $chaussure['description']; ?></p>
              <p class="card-text">Prix : $<?php echo number_format($chaussure['prix'], 2); ?></p>
            </div>
          </div>
          <form action="produits_delete.php" method="post">
              <button class="btn btn-danger" name="id" value="<?php echo $chaussure['ID'] ?>">Supprimer</button>
          </form>
        </div>
        <?php
        }
        ?>
      </div>
  </div>
  <!-- FIN MAIN -->

  <!-- FOOTER -->
  <?php include_once("./inc/footer.php"); ?>
  <!-- FIN FOOTER -->
</body>

</html>