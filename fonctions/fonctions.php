<?php
try{

    $mysqlclient = new PDO('mysql:host=localhost;dbname=b2dev2;charset=utf8','root','',
[PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION]);



}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}
//Ajout un user
function ajoutUser($mysqlclient, $userNew){
    //Ecriture de la requête our ajouter un utilisateur dans la table user
    $sqlQuery = "INSERT INTO users(nom,prenom,age) VALUES(:nom, :prenom, :age)";
    //Preparation de la requête
    $insertUser = $mysqlclient->prepare($sqlQuery);
    //Execution permet d'ajouter l'utilisateur dans la base de données
    $insertUser->execute([
        'nom' => $userNew['nom'],
        'prenom' => $userNew['prenom'],
        'age' => $userNew['age']

    ]);
}

//Selectionner tous les users
function userALL($mysqlclient){
    $sqlQuery = 'SELECT * FROM users ORDER BY nom ASC';
    $users = $mysqlclient->prepare($sqlQuery);
    $users->execute();
    //retourne un tableau contenant toutes les lignes d'un jeu d'enregistrements
    return $users->fetchAll();
}

//Séléctionner un utilisateur
function userSelect($mysqlclient, $id){
    $sqlQuery='SELECT * FROM users WHERE id='.$id.'';
    $user=$mysqlclient->prepare($sqlQuery);
    $user->execute();
    
    
    return $user->fetch(PDO::FETCH_ASSOC);
    
}
//Modification d'un user
function userUpdate($mysqlclient,$userUpdate){
    $sqlQuery = 'UPDATE users SET nom = :nom,prenom = :prenom,age= :age WHERE id= :id';
    $updateUser = $mysqlclient->prepare($sqlQuery);
    $updateUser->execute([
        'id' => $userUpdate['id'],
        'nom' => $userUpdate['nom'],
        'prenom' => $userUpdate['prenom'],
        'age' => $userUpdate['age']
    ]);

}
// Suppression d'un user
function userSuppr($mysqlclient, $id){
    $sqlQuery= 'DELETE FROM users WHERE id= '.$id.'';
    $user = $mysqlclient->prepare($sqlQuery);
    $user->execute();

}

//Vérification des données transmises dans l'url
if(isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])){
    $userSelect = userSelect($mysqlclient, $_GET['id']);
}
//Vérification des données transmises par le formulaire utilisateur
if(isset($_POST['type_form']) && $_POST['type_form'] === 'user' && !empty($_POST)){
    //On verifie si l'id est envoyé
    if(isset($_POST['id']) && !empty($_POST['id'])){
        // On vérifie si la suppression est possible ou non
        if(isset($_POST['suppr']) && !empty($_POST['suppr'])){
            $id= $_POST['id'];
            userSuppr($mysqlclient, $id);
        }else{
        $userUpdate= $_POST;
        userUpdate($mysqlclient,$userUpdate);
        }
    }else{
        $userNew= $_POST;
        ajoutUser($mysqlclient,$userNew);
    }


    // Créer un menu qui soit accessible sur toutes les pages header, footer
    // Base de donnéess : créer une table produits
    // id, titre, description, prix, catégorie
    // id :PK,
    // titre: varchar(255)
    // description TEXT
    // prix NUMERIC
    // categorie INT

    // Base de données : créer une table categories
    // id : PK
    // titre : varchar(255)

    // Faire la crud de produits et categorie
    // Quand je sélectionne une categorie ca doit lister tous les produits de cette categorie
}