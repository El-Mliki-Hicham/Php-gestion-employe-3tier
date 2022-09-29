<?php

include ("Business/EmployeBLL.php");
    // Trouver tous les employés depuis la base de données 
    $employeBLL = new EmployeBLL();

if(!empty($_POST)){
	$employe = new Employe();
	$employe->setPrenom($_POST['Prenom']);
	$employe->setNom($_POST['Nom']);
	$employe->setDate_de_naissance($_POST['Date_de_naissance']);
	$employeBLL->AddEmploye($employe);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}
?>

<form action="" method="POST">                                                          
Prenom : <input type="text" name="Prenom" >
Nom: <input type="text" name="Nom" >
Date_de_naissance : <input type="date"  name="Date_de_naissance" >
   
<button type="submit">modifier</button>
</form>
