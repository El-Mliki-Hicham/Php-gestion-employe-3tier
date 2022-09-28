<?php


include("database/GestionEmployes.php");
class EmployeFunction{
    private $gestionEmploye = null;


    public function __construct(){
        $this->gestionEmploye = new GestionEmployes();
    } 
    

    public function GetAllEmployes(){
       
        return $this->gestionEmploye->afficher();
    }
    public function AddEmploye($employe){
       
        return $this->gestionEmploye->Ajouter($employe);
    }
    // public function EditEmploye($id){
       
    //     return $gestionEmploye->RechercherParId($id);
    // }

}
?>