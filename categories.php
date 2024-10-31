<?php include_once "fonctions/fonctionsCategories.php" ?>
<?php include "templates/header.php" ?>
<main class="categories">
    <h2>Formulaire pour les catégories</h2>
    <form action="categories.php" method="POST">
        <input type="hidden" name="type_form" value="categorie">
        <input type="text" name="titre" id="titre" placeholder="Titre">
        <input type="submit" value="envoyer">
    </form>

    <h2>Liste des catégories</h2>
    <section>
    <?php
    $categories = categorieALL($mysqlclient);
    if (count($categories) > 0) {
        foreach ($categories as $key => $categorie) { ?>
        <article>
            <p onclick="<?php ?>"><?php echo $categorie['id'] . ' | ' . $categorie['titre']; ?></p>
            <p><a href="edit.php?id=<?= $categorie['id'] ?>">Editer</a> | <a href="suppression.php?id=<?= $categorie['id'] ?>">Supprimer</a></p>
        </article>
        <?php
        }
    } else {
        echo "<p>Pas d'utilisateurs inscrit</p>";
    }
    ?>
    </section>

    <h2>Catégorie <?php ?></h2>
    <?php
     
    ?>
    
</main>
<?php include "templates/footer.php" ?>