<?php include_once "fonctions/fonctionsProduits.php" ?>
<?php include "templates/header.php" ?>
<main class="produits">
    <h2>Formulaire pour les produits</h2>
    <form action="produits.php" method="POST">
        <input type="hidden" name="type_form" value="produit">
        <input type="text" name="titre" id="titre" placeholder="Titre">
        <input type="text" name="description" id="description" placeholder="Description">
        <input type="text" name="prix" id="prix" placeholder="Prix">
        <input type="text" name="categorie" id="categorie" placeholder="Catégorie">
        <input type="submit" value="envoyer">
    </form>

    <h2>Liste des produits</h2>
    <section>
    <?php
    $produits = produitALL($mysqlclient);
    if (count($produits) > 0) {
        foreach ($produits as $key => $produit) { ?>
        <article>
            <p onclick="<?php ?>"><?php echo $produit['id'] . ' | ' . $produit['titre']. ' | ' . $produit['description']. ' | ' . $produit['prix']. ' | ' . $produit['categorie']; ?></p>
            <p><a href="edit.php?type=produit&id=<?= $produit['id'] ?>">Editer</a> | <a href="suppression.php?id=<?= $produit['id'] ?>">Supprimer</a></p>
        </article>
        <?php
        }
    } else {
        echo "<p>Pas d'utilisateurs inscrit</p>";
    }
    ?>
    </section>

    
</main>
<?php include "templates/footer.php" ?>