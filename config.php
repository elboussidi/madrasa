<?php
require 'connect.php';

?>
 
          <?php
          
    if(isset($_GET['reg'])){

   $uname=$_GET['uname'];
    $uemail=$_GET['uemail'];
     $uphone=$_GET['uphone'];
      $udate=$_GET['udate'];
       $upassword=$_GET['upassword'];
       $upassword2=$_GET['upassword2'];
        $ulev=$_GET['urole'];
        $ugender=$_GET['ugender'];
        
         $path='http://localhost/madrasa/img/'.$_FILES['file']['name'];
      $dir="img/".$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$dir);
        echo $path;
   if($upassword =! $upassword2){
     echo '<div class="alert alert-danger" role="alert">
 sorry eroor password !
</div> ';   } else {
       
    $ins="INSERT INTO `usr` (`id`, `name`, `photo`, `email`, `password`, `lev`, `phone`, `date_b`, `date_c`, `gender`, `position`, `bio`)"
            . " VALUES (NULL, '$uname', '$path', '$uemail', '$upassword2', '$ulev', '$uphone', '$udate', CURRENT_TIMESTAMP, '$ugender', '', '')";
    $qins= mysqli_query($conect, $ins) ;
    if($qins){
       echo '<div class="alert alert-success" role="alert">
 your data has been insert !
</div> ';   
       echo '<script>
    alert("good");
    
    </script>';
       header("location:admin/member.php");
    } else {
        
    
        echo '<div class="alert alert-danger" role="alert">
 sorry eroor password !
</div> '; 
    }
    
    
   }
   
     
   
    }//end frist if
    
    ?>
    
