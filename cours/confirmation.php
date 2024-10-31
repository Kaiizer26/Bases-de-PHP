<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Confirmation</h1>

    <?php
        if(isset($_GET) && !empty($_GET)){
            var_dump($_GET);?>
        
            <h2>Bonjour <?php echo $_GET['nom']; ?> <?php echo $_GET['prenom'];?> </h2>
            <p>Le code postal est <?php echo $_GET['codepostal'] ?></p>
            <p>vous êtes : <?php echo $_GET['sexe'] ?></p>
            <p>Votre numéro : <?php echo $_GET['telephone'] ?></p>
            <p>Votre email : <?php echo $_GET['email'] ?></p>
            <p>Le commentaire : <?php echo $_GET['commentaire'] ?></p>

        <?php
        }
        ?>
        <?php
            if(isset($_POST) && !empty($_POST)){
                var_dump($_POST);?>
            
                <h2>Bonjour <?php echo $_POST['nom']; ?> <?php echo $_POST['prenom'];?> </h2>
                <p>Le code postal est <?php echo $_POST['codepostal'] ?></p>
                <p>vous êtes : <?php echo $_POST['sexe'] ?></p>
                <p>Votre numéro : <?php echo $_POST['telephone'] ?></p>
                <p>Votre email : <?php echo $_POST['email'] ?></p>
                <p>Le commentaire : <?php echo $_POST['commentaire'] ?></p>
    
            <?php
            }
            ?>
</body>
</html>