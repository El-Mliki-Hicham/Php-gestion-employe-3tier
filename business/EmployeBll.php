<?php


include("Data_access/EmployeDA.php");
class EmployeBLL{
    private $gestionEmploye = null;

  

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

}
?>