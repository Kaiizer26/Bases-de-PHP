<?php
try{

    $mysqlclient = new PDO('mysql:host=localhost;dbname=b2dev2;charset=utf8','root','',
[PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION]);



}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

function ajoutCategorie($mysqlclient, $categorieNew){
    $sqlQuery = "INSERT INTO categories(titre) VALUES(:titre)";
    $insertcategorie = $mysqlclient->prepare($sqlQuery);
    $insertcategorie->execute([
        'titre' => $categorieNew['titre']
    ]);
}

// Selectionner toutes les categories
function categorieALL($mysqlclient){
    $sqlQuery="SELECT * FROM categories ORDER BY titre ASC";
    $categories= $mysqlclient->prepare($sqlQuery);
    $categories->execute();
    return $categories->fetchAll();
}

//  Sélectionner une categorie
function categorieSelect($mysqlclient, $id){
    $sqlQuery= 'SELECT * FROM categories WHERE id='.$id.'';
    $categorie=$mysqlclient->prepare($sqlQuery);
    $categorie->execute();

    return $categorie->fetch(PDO::FETCH_ASSOC);
}

//Modification d'un user
function categorieUpdate($mysqlclient,$categorieUpdate){
    $sqlQuery = 'UPDATE categories SET titre=:titre WHERE id= :id';
    $updateCategorie = $mysqlclient->prepare($sqlQuery);
    $updateCategorie->execute([
        'id' => $categorieUpdate['id'],
        'titre' => $categorieUpdate['titre']
    ]);

}
// Suppression d'un user
function categorieSuppr($mysqlclient, $id){
    $sqlQuery= 'DELETE FROM categories WHERE id= '.$id.'';
    $categorie = $mysqlclient->prepare($sqlQuery);
    $categorie->execute();

}

//Vérification des données transmises dans l'url
if(isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])){
    $categorieSelect = categorieSelect($mysqlclient, $_GET['id']);
}

//Vérification des données transmises par le formulaire categorie
if(isset($_POST['type_form']) && $_POST['type_form'] === 'categorie' && !empty($_POST)){
    //On verifie si l'id est envoyé
    if(isset($_POST['id']) && !empty($_POST['id'])){
        // On vérifie si la suppression est possible ou non
        if(isset($_POST['suppr']) && !empty($_POST['suppr'])){
            $id= $_POST['id'];
            categorieSuppr($mysqlclient, $id);
        }else{
        $categorieUpdate= $_POST;
        categorieUpdate($mysqlclient,$categorieUpdate);
        }
    }else{
        $categorieNew= $_POST;
        ajoutCategorie($mysqlclient,$categorieNew);
    }
}