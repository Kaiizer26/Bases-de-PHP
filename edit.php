<?php include_once("fonctions/fonctions.php") ?>
<?php include_once("fonctions/fonctionsCategories.php") ?>
<?php include_once("fonctions/fonctionsProduits.php") ?>
<?php include "templates/header.php" ?>
<main>
    <h2>Formulaire d'édition</h2>
    <?php if($userSelect){ ?>
    <form action="index.php" method="POST">
        <input type="hidden" name="type_form" value="user">
        <input type="hidden" name="id" value="<?php echo $userSelect['id']?>">
        <input type="text" name="nom" id="nom" placeholder="nom" value="<?=$userSelect['nom']?>">
        <input type="text" name="prenom" id="prenom" placeholder="prenom" value="<?=$userSelect['prenom']?>">
        <input type="number" name="age" id="age" placeholder="age" value="<?=$userSelect['age']?>">
        <input type="submit" value="envoyer">

    </form>
    <?php
    }
    ?>

    <?php if($categorieSelect){ ?>
    <form action="categories.php" method="POST">
        <input type="hidden" name="type_form" value="categorie">
        <input type="hidden" name="id" value="<?php echo $categorieSelect['id']?>">
        <input type="text" name="titre" id="titre" placeholder="titre" value="<?=$categorieSelect['titre']?>">
        <input type="submit" value="envoyer">

    </form>
    <?php
    }
    ?>

    <?php if($produitSelect){ ?>
    <form action="produits.php" method="POST">
        <input type="hidden" name="type_form" value="produit">
        <input type="hidden" name="id" value="<?php echo $produitSelect['id']?>">
        <input type="text" name="titre" id="titre" placeholder="titre" value="<?=$produitSelect['titre']?>">
        <input type="text" name="description" id="description" placeholder="Description" value="<?=$produitSelect['description']?>">
        <input type="text" name="prix" id="prix" placeholder="Prix" value="<?=$produitSelect['prix']?>">
        <input type="text" name="categorie" id="categorie" placeholder="Catégorie" value="<?=$produitSelect['categorie']?>">
        <input type="submit" value="envoyer">

    </form>
    <?php
    }
    ?>
</main>

<?php include "templates/footer.php" ?>
