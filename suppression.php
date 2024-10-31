<?php include_once("fonctions/fonctions.php") ?>
<?php include_once("fonctions/fonctionsCategories.php") ?>
<?php include_once("fonctions/fonctionsProduits.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Suppression</h1>
    <?php if($userSelect){ ?>
    <form action="index.php" method="POST">
        <input type="hidden" name="type_form" value="user">
        <input type="hidden" name="id" value="<?php echo $userSelect['id']?>">
        <input type="hidden" name="suppr" value="1">
        
        <input type="submit" value="La suppression est définitive">

    </form>
    <?php
    }
    ?>
    <?php if($categorieSelect){ ?>
    <form action="categories.php" method="POST">
        <input type="hidden" name="type_form" value="categorie">
        <input type="hidden" name="id" value="<?php echo $categorieSelect['id']?>">
        <input type="hidden" name="suppr" value="1">
        
        <input type="submit" value="La suppression est définitive">

    </form>
    <?php
    }
    ?>

    <?php if($produitSelect){ ?>
    <form action="produits.php" method="POST">
        <input type="hidden" name="type_form" value="produit">
        <input type="hidden" name="id" value="<?php echo $produitSelect['id']?>">
        <input type="hidden" name="suppr" value="1">
        
        <input type="submit" value="La suppression est définitive">

    </form>
    <?php
    }
    ?>
</body>
</html>