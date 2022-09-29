<?php
   include ("Business/EmployeBLL.php");
   // Trouver tous les employés depuis la base de données 
  


if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
     $employeBLL = new EmployeBLL();
    $id = $_GET['id'] ;
    $employeBLL->DeleteEmploye($id);
        
    header('Location: index.php');
}
?>
Footer
© 2022 GitHub, Inc.