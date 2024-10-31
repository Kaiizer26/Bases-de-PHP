<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les commentaires</h1>
    <form action="commentaire.php" method="POST">
        <textarea name="commentaire" id="commentaire"></textarea>
        <input type="submit" value="envoyer">
    </form>

    <?php if(isset($_POST) && !empty($_POST)){
        $insultes= ['salope', 'merde', 'FDP', 'con'];
        $commentaire= $_POST['commentaire'];

        foreach($insultes as $insulte){
            $replace = str_repeat('*', strlen($insulte));
            $commentaire= str_replace($insulte, $replace, $commentaire);
        }
    
    }
    echo $commentaire;

    ?>
</body>
</html>