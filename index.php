<?php include_once "fonctions/fonctions.php" ?>
<?php include "templates/header.php" ?>
<main class="index">

    <h2>Formulaire pour les utilisateurs</h2>
    <form action="index.php" method="POST">
        <input type="hidden" name="type_form" value="user">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="number" name="age" id="age" placeholder="age">
        <input type="submit" value="envoyer">
    </form>

    <h2>Liste des users</h2>
    <section>
    <?php
    $users = userALL($mysqlclient);

    if (count($users) > 0) {
        foreach ($users as $key => $user) { ?>
        <article>
            <p><?php echo $user['id'] . ' | ' . $user['nom'] . '|' . $user['prenom'] . '|' . $user['age'] . 'ans'; ?></p>
            <p><a href="edit.php?type=user&id=<?= $user['id'] ?>">Editer</a> | <a href="suppression.php?id=<?= $user['id'] ?>">Supprimer</a></p>
        </article>
    <?php
        }
    } else {
        echo "<p>Pas d'utilisateurs inscrit</p>";
    }
    ?>
    </section>
</main>
<?php include "templates/footer.php" ?>