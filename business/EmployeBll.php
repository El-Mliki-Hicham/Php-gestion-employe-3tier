<?php


include("Data_access/EmployeDA.php");
class EmployeBLL{
    private $employeDA= null;

  

    public function __construct(){
        $this->employeDA = new EmployeDA();

        // if(isset($_POST['id'])){
        //     $this->EditEmploye($_POST["id"]);
        // }
      
    } 
    

    public function GetAllEmployes(){
       
        return $this->employeDA->GetEmployes();
    }
    public function AddEmploye($employe){
       
        return $this->employeDA->AddEmploye($employe);
    }
    public function EditEmploye($id){
       
       $EditData = $this->employeDA->Edit($id);
       return $EditData;  
    }
    public function UpdateEmploye($id,$nom,$prenom,$date_de_naissance){
       
       $EditData = $this->employeDA->Update($id,$nom,$prenom,$date_de_naissance);
       return $EditData;  
    }
    public function DeleteEmploye($id){
       
       $EditData = $this->employeDA->Delete($id);
       return $EditData;  
    }

}



?>