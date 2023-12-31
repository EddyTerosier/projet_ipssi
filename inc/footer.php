<?php
$user = $_SESSION["user"] ?? "";
?>
<!-- FOOTER -->
<footer>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Accueil</a></li>
        <li class="nav-item"><a href="produits.php" class="nav-link px-2 text-muted">Produits</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
        <?php if ($user): ?>
            <li class="nav-item"><a href="profil.php" class="nav-link px-2 text-muted">Profil</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link px-2 text-muted">Déconnexion</a></li>
            <li class="nav-item"><a href="admin.php" class="nav-link px-2 text-muted">Admin</a></li>
        <?php else: ?>
            <li class="nav-item"><a href="connexion.php" class="nav-link px-2 text-muted">Connexion</a></li>
        <?php endif; ?>
    </ul>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="politique.php" class="nav-link px-2 text-muted">Politiques de confidentialités</a>
        </li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cookies</a></li>
    </ul>
    <p class="text-center text-muted">© 2023 Addidous Shoes, Inc</p>
</footer>
<!-- FIN FOOTER -->