<?php

    
$localhost="localhost";
$username="root";
$password="";
$database="madrasa";
$conect=mysqli_connect($localhost,$username,$password,$database);

if(!$conect){
    die("عذرا لم يتم الاتصال بقاعدة البيانات");
}
 else {
   echo 'تم الاتصال بنجاح  ';
 }

    


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

