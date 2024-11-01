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
                    <p><a href="categories.php?categorie_id=<?php echo $categorie['id'];?>"><?php echo $categorie['id'] . ' | ' . $categorie['titre']; ?></a></p>
                    <p><a href="edit.php?type=categorie&id=<?= $categorie['id'] ?>">Editer</a> | <a href="suppression.php?type=categorie&id=<?= $categorie['id'] ?>">Supprimer</a></p>
                </article>
        <?php
            }
        } else {
            echo "<p>Pas d'utilisateurs inscrit</p>";
        }
        ?>
    </section>

    <h2>Catégorie :<?php ?></h2>
    <!-- $produits = produitsParCategorie($mysqlclient, $id); -->
     <section class="produit-cat">
    <?php
    if (isset($_GET['categorie_id']) && is_numeric($_GET['categorie_id'])){
        $categorie_id = $_GET['categorie_id'];
        $produits = produitsParCategorie($mysqlclient, $categorie_id);
        if (count($produits) > 0) {
            foreach ($produits as $key => $produit) { ?>
                <article>
                    <p><?php echo $produit['id'] . ' | ' . $produit['titre'] . ' | ' . $produit['description'] . ' | ' . $produit['prix'] . ' | ' . $produit['categorie']; ?></p>
                    <p><a href="edit.php?type=produit&id=<?= $produit['id'] ?>">Editer</a> | <a href="suppression.php?type=produit&id=<?= $produit['id'] ?>">Supprimer</a></p>
                </article>
    <?php
            }
        } else {
            echo "<p class='produit-cat'>Pas de produit de cette catégorie</p>";
        }
    }
    ?>
     </section>
</main>
<?php include "templates/footer.php" ?>