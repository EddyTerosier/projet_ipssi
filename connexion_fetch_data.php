<?php
require_once './inc/database.php';
// $result = $pdo->prepare("SELECT * FROM users WHERE id = $id");
// $result->execute();
$error = "";

$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $statementUser = $pdo->prepare("SELECT * FROM users WHERE email = :email");
  $statementUser->bindValue(":email", $email);
  $statementUser->execute();
  $user = $statementUser->fetch();

//   var_dump($user);

  if ($user) {
    if (password_verify($password, $user['password'])) {
      echo "Login Ok !";
      header("location: /index.php");
    } else {
        $error = "Mot de passe incorrect";
        echo $error;
    }
  } else {
    $error = "Adresse e-mail non trouvée";
  }
} else {
  $error = "Veuillez saisir une adresse e-mail valide";
}

?>