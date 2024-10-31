<?php include_once "fonctions/fonctionsCategories.php"?>
<?php include "templates/header.php" ?>

<h2>Formulaire pour les catégories</h2>
    <form action="categories.php" method="POST">
        <input type="text" name="titre" id="titre" placeholder="Titre">
        <input type="submit" value="envoyer">
    </form>

<?php include "templates/footer.php" ?>
