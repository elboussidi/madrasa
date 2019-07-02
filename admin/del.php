<?php
require '../connect.php';

?>
<?php

if($_GET['idm']){
    $idm=$_GET['idm'];
    
 $qdel="DELETE FROM `usr` WHERE `id`='$idm';";
 if(mysqli_query($conect, $qdel)){
     
     header("location:member.php");

     
 }
    
    
}
if ($_GET['ids']) {
     $ids=$_GET['ids'];
   $qdel="DELETE FROM `usr` WHERE `id`='$ids';";
 if(mysqli_query($conect, $qdel)){
     
       $qdel2="DELETE FROM `note` WHERE `id`='$ids';";
 if(mysqli_query($conect, $qdel2)){
     
     header("location:student.php");

     

   }  
}   
 }  


if ($_GET['idnote']) {
     $idnote=$_GET['idnote'];
   $qdel="DELETE FROM `note` WHERE `id`='$idnote';";
 if(mysqli_query($conect, $qdel)){
     
       $qdel2="DELETE FROM `note` WHERE `id`='$idnote';";
 if(mysqli_query($conect, $qdel2)){
     
     header("location:note.php");

     

   }  
}   
 }  
