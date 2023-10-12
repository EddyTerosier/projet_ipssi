<?php
session_start();
require_once './inc/database.php';
// $result = $pdo->prepare("SELECT * FROM users WHERE id = $id");
// $result->execute();
$error = "";

/* LOGIQUE DE LA PAGE */

/* CONDITION DU FORMULAIRE */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  /* FILTRES */
  $input = filter_input_array(INPUT_POST, [
    "email" => FILTER_SANITIZE_EMAIL,
  ]);

  $email = $input['email'] ?? "";
  $password = $_POST['password'] ?? "";
  if (!$password || !$email) {
    $error = "Erreur il manque des informations !";
  } else {
    /* PREPARATION DE LA REQUETE */
    $statementUser = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    /* ASSOCIATION DES VALEURS AVEC LES DONNES UTILISATEURS */
    $statementUser->bindValue(":email", $email);
    $statementUser->execute();
    /* RECUPERATION D'UN TABLEAU ASSOCIATIF */
    $user = $statementUser->fetch();

    /* VERIFICATION */
    //   var_dump($user);
    // die();

    if ($user) {
      /* COMPARAISON DES MOTS DE PASSE AVEC HASHAGE */
      if (password_verify($password, $user['password'])) {
        // echo "Login Ok !";
        /* CREATION D'UNE SESSION */
        $sessionId = bin2hex(random_bytes(32));
        /* PREPARATION DE LA REQUETE */
        $statementSession = $pdo->prepare("INSERT INTO session (sessionid,userid) VALUES (
              :sessionid,
              :userid)");
        /* ASSOCIATION DES VALEURS AVEC LES DONNES UTILISATEURS */
        $statementSession->bindValue(":userid", $user["id"]);
        $statementSession->bindValue(":sessionid", $sessionId);
        $statementSession->execute();
        /* CREATION D'UNE SIGNATURE AVEC CLE PERSO */
        $signature = hash_hmac("sha256", $sessionId, "ici c'est paris");
        /* ON PLACE L'ID DANS LES COOKIES UTILISATEUR */
        /* AVEC UNE DUREE APRES LAQUELLE IL SERA SUPPRIME AUTO */
        setcookie("session", $sessionId, time() + 60 * 60 * 24 * 14, "", "", false, true);
        setcookie("signature", $signature, time() + 60 * 60 * 24 * 14, "", "", false, true);
        $_SESSION["user"] = $user;
        // var_dump($_SESSION["user"]);
        // die();
        /* ON REDIRIGE */
        header("location: /profil.php");
      } else {
        $error = "Mot de passe incorrect";
        // echo $error;
      }
    } else {
      $error = "Adresse e-mail non trouvée";
    }

  }
} else {
  $error = "Veuillez saisir une adresse e-mail valide";
}

?>