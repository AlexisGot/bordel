<?php if($_SESSION && $_SESSION['pseudo']):?>
    <a href="index.php?controller=user&action=signOut">Se Deconnecter</a>
<?php else: ?>
    <p>
        <a href="index.php?controller=user&action=showSignUpForm">S'inscrire</a>
        <span>&nbsp;|&nbsp;</span>
        <a href="index.php?controller=user&action=showLoginForm">Se Connecter</a>
    </p>
<?php endif; ?>

<h1>Bienvenue sur la page d'accueil</h1>
