<?php
try{

    $mysqlclient = new PDO('mysql:host=localhost;dbname=b2dev2;charset=utf8','root','',
[PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION]);



}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

function ajoutProduit($mysqlclient, $produitNew){
    $sqlQuery = "INSERT INTO produits(titre, description, prix, categorie) VALUES(:titre, :description, :prix, :categorie)";
    $insertproduit = $mysqlclient->prepare($sqlQuery);
    $insertproduit->execute([
        'titre' => $produitNew['titre'],
        'description' => $produitNew['description'],
        'prix' => $produitNew['prix'],
        'categorie' => $produitNew['categorie']
    ]);
}

// Selectionner toutes les produits
function produitALL($mysqlclient){
    $sqlQuery="SELECT * FROM produits ORDER BY titre ASC";
    $produits= $mysqlclient->prepare($sqlQuery);
    $produits->execute();
    return $produits->fetchAll();
}

//  Sélectionner une produit
function produitSelect($mysqlclient, $id){
    $sqlQuery= 'SELECT * FROM produits WHERE id='.$id.'';
    $produit=$mysqlclient->prepare($sqlQuery);
    $produit->execute();

    return $produit->fetch(PDO::FETCH_ASSOC);
}

//Modification d'un user
function produitUpdate($mysqlclient,$produitUpdate){
    $sqlQuery = 'UPDATE produits SET titre=:titre, description=:description, prix=:prix, categorie=:categorie WHERE id= :id';
    $updateProduit = $mysqlclient->prepare($sqlQuery);
    $updateProduit->execute([
        'id' => $produitUpdate['id'],
        'titre' => $produitUpdate['titre'],
        'description' => $produitUpdate['description'],
        'prix' => $produitUpdate['prix'],
        'categorie' => $produitUpdate['categorie']
    ]);

}
// Suppression d'un user
function produitSuppr($mysqlclient, $id){
    $sqlQuery= 'DELETE FROM produits WHERE id= '.$id.'';
    $produit = $mysqlclient->prepare($sqlQuery);
    $produit->execute();

}

//Vérification des données transmises dans l'url
if(isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])){
    $produitSelect = produitSelect($mysqlclient, $_GET['id']);
}

//Vérification des données transmises par le formulaire produit
if(isset($_POST['type_form']) && $_POST['type_form'] === 'produit' && !empty($_POST)){
    //On verifie si l'id est envoyé
    if(isset($_POST['id']) && !empty($_POST['id'])){
        // On vérifie si la suppression est possible ou non
        if(isset($_POST['suppr']) && !empty($_POST['suppr'])){
            $id= $_POST['id'];
            produitSuppr($mysqlclient, $id);
        }else{
        $produitUpdate= $_POST;
        produitUpdate($mysqlclient,$produitUpdate);
        }
    }else{
        $produitNew= $_POST;
        ajoutproduit($mysqlclient,$produitNew);
    }
}