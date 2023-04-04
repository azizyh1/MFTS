<?php

$dbhost='localhost';
$dbname='datasave';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);


      if(isset($_POST['Ajouter']))
      {
        $codeabarre=$_POST['codeabarre'];
        $codepalette=$_POST['codepalette'];
        $emplacement=$_POST['emplacement'];
       if($emplacement=='stockmp'){
        $result=mysqli_query($mysqli,"INSERT into stockmp values('','$codeabarre','$codepalette','$emplacement',current_timestamp)");
      } else{
        $result=mysqli_query($mysqli,"INSERT into stockpf values('','$codeabarre','$codepalette','$emplacement',current_timestamp)");
       }
        if ($result)
        {
          echo "Success";
        }
        else {
          echo "Failed";
        }
      }
   
?>