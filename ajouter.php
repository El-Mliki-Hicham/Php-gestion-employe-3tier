<?php

include ("business/EmployeBll.php");
    // Trouver tous les employés depuis la base de données 
    $gestionEmployes = new EmployeFunction();

if(!empty($_POST)){
	$employe = new Employe();
	$employe->setPrenom($_POST['Prenom']);
	$employe->setNom($_POST['Nom']);
	$employe->setDate_de_naissance($_POST['Date_de_naissance']);
	$gestionEmployes->AddEmploye($employe);
	
	// Redirection vers la page index.phpnpn
	header("Location: index.php");
}
?>

<form action="" method="POST">
    <div class="form-outline mb-4">
   Nom :  <input type="text" name="Prenom"  id="form1Example1" class="form-control" />
     </div>
  <div class="form-outline mb-4">
   Prenom : <input  type="text" name="Nom"  id="form1Example1" class="form-control" />
   </div>

  <div class="form-outline mb-4">
   Date de naissance : <input type="date"  name="Date_de_naissance" id="form1Example2" class="form-control" />
      </div>

    <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
</form>
