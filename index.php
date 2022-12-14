<?php
    // include "database/GestionEmployes.php";
    include ("Business/EmployeBLL.php");
    // Trouver tous les employés depuis la base de données 
    $employeBLL = new EmployeBLL();
    $data = $employeBLL->GetAllEmployes();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des employés</title>
</head>
<body>
    <div>
        <a href="Ajouter.php">Ajouter un employé</a>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th></th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getNom() ?></td>
                <td><?= $value->getPrenom() ?></td>
                <td><?= $value->getDate_de_naissance() ?></td>
                <td>
                    <a href="Editer.php?id=<?php echo $value->getId() ?>">Éditer</a>
                    <a href="Supprimer.php?id=<?php echo $value->getId() ?>">Supprime</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>