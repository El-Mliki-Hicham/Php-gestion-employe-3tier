<?php


function getConnection(){
      
      $Connection = mysqli_connect('localhost', 'root', '', 'gestion-employe');
     
   
 
  
  return $Connection;
  
}

?>