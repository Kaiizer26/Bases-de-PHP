<?php include_once("fonctions/fonctions.php") ?>
<?php include_once("fonctions/fonctionsCategories.php") ?>
<?php include_once("fonctions/fonctionsProduits.php") ?>
<?php include "templates/header.php" ?>
<?php 
$type = isset($_GET['type']) ? $_GET['type'] : null;
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Sélectionne l'entité en fonction du type
if ($type === 'user' && $id) {
    $userSelect = userSelect($mysqlclient, $id);
} elseif ($type === 'categorie' && $id) {
    $categorieSelect = categorieSelect($mysqlclient, $id);
} elseif ($type === 'produit' && $id) {
    $produitSelect = produitSelect($mysqlclient, $id); // Assurez-vous d'avoir cette fonction pour sélectionner un produit
}
?>
<main>
    <h2>Suppression</h2>
    <?php if($type === 'user' && $userSelect){ ?>
    <form action="index.php" method="POST">
        <input type="hidden" name="type_form" value="user">
        <input type="hidden" name="id" value="<?php echo $userSelect['id']?>">
        <input type="hidden" name="suppr" value="1">
        
        <input type="submit" value="La suppression est définitive">

    </form>
    <?php
    }
    ?>
    <?php if($type === 'categorie' && $categorieSelect){ ?>
    <form action="categories.php" method="POST">
        <input type="hidden" name="type_form" value="categorie">
        <input type="hidden" name="id" value="<?php echo $categorieSelect['id']?>">
        <input type="hidden" name="suppr" value="1">
        
        <input type="submit" value="La suppression est définitive">

    </form>
    <?php
    }
    ?>

    <?php if($type === 'produit' && $produitSelect){ ?>
    <form action="produits.php" method="POST">
        <input type="hidden" name="type_form" value="produit">
        <input type="hidden" name="id" value="<?php echo $produitSelect['id']?>">
        <input type="hidden" name="suppr" value="1">
        
        <input type="submit" value="La suppression est définitive">

    </form>
    <?php
    }
    ?>
</main>
<?php include "templates/footer.php" ?>
