<?php


include("database/GestionEmployes.php");
class EmployeFunction{
    private $gestionEmploye = null;


    public function __construct(){
        $this->gestionEmploye = new GestionEmployes();
    } 
    

    public function GetAllEmployes(){
       
        return $this->gestionEmploye->GetEmloyes();
    }
    public function AddEmploye($employe){
       
        return $this->gestionEmploye->AddEmploye($employe);
    }
    // public function EditEmploye($id){
       
    //     return $gestionEmploye->RechercherParId($id);
    // }

}


Employe business
employe data exec
?>