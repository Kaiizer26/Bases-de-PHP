<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="multiplication.php" method="post">
        <label for="nb">afficher la table de </label>
        <input type="text" name="nb" id="nb" placeholder="Nombre">
    <p><?php if(isset($_POST) && !empty($_POST['nb'])){
        for($nb=1; $nb<=10; $nb++){
        echo $nb * $_POST['nb']."<br>";
    }
    }
        ?></p> 
    </form>

    
    <form action="" method="POST">
        <label for="plage1">Plage 1 :</label>
        <input type="number" name="plage1" id="plage1">
        <label for="plage2">Plage 2 :</label>
        <input type="number" name="plage2" id="plage2">
        <input type="submit">

        
    
        <?php if(isset($_POST) && !empty($_POST['plage1']) && !empty($_POST['plage2'])){
            if(isset($_POST['plage1']) && !empty($_POST['plage1']) && isset($_POST['plage2']) && !empty($_POST['plage2'])){
                if($_POST['plage1'] > $_POST['plage2']){
                    $temp= $_POST['plage2'];
                    $_POST['plage2'] = $_POST['plage1'];
                    $_POST['plage1'] = $temp;
                }
                for($nbtable=$_POST['plage1']; $nbtable<=$_POST['plage2']; $nbtable++){
                    echo "<br> Table de : ".$nbtable;
                    for($nb=1; $nb<=10; $nb++){
                        echo "<br>".$nbtable * $nb;
                    }
                }
            }
        
    }?>
    </form>
</body>
</html>