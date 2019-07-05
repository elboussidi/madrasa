 <?php
require '../connect.php';

?>
<!DOCTYPE html>
<html lang="en">
    <title>update note</title>
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
   
</head>


<body>
    <?php   include '../header.php'; ?>
    <br>
   
 <?php include 'x.php'; ?> 
    <!--  menu  -->
    
    <br><br>
    
    
        <div class='row'>
  <div class='col-3'>
    <div class='nav flex-column nav-pills' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
    <?php include 'slaid.php'; ?>
    
    </div>
  </div>
        
      
        <div class="col-9">
        <div class="panel -info">
       
     
<?php   
  if(isset($_SESSION['lev'])){
        $se=$_SESSION['lev'];
        if($se !== "derecteur" or $se !== "prof"){
                            echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("../index.php"); </script>'; 
        }
    } else {
          echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("../index.php"); </script>'; 
    }

if(isset($_GET['id']) ) {
$idn=$_GET['id'];

}

?>




<div class="container">
 
        <div class="col-md-12">  
                        <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div> 
                <table class="table">     <thead>
                    <tr>
                        
                        <th>
                            en
                        </th>
                             <th>
                           ar
                        </th>
                             <th>
                           fr
                        </th>
                             <th>
                           pc
                        </th>
                             <th>
                            svt
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
   <?php                    
$reed="SELECT * FROM `note` WHERE `id`=$idn ";
$reedqr= mysqli_query($conect, $reed);
if(!$reedqr){
    die("sorry");
    
} else {   
//    echo ' <div class="post">';
 while ($row2 = mysqli_fetch_assoc($reedqr)) {
       
    $en=$row2['en'];
    $ar=$row2['ar'];
    $fr=$row2['fr'];
    $pc=$row2['pc']; 
    $svt=$row2['svt']; 
 }
    echo "
                <form  method='POST'>
                    <tr class='active'>
                       
                        <td>
                          <input class='form-control' type='text' value='$en' name='en' >
                        </td>
                        <td>
                         <input class='form-control' type='text' value='$ar'  name='ar' >
                        </td>
                          <td>
                          <input class='form-control' type='text' value='$fr' name='fr' >
                            
                        </td>  <td>
                            <input class='form-control' type='text' value='$pc'  name='pc' >
                        </td>  <td>
                          <input class='form-control' type='text' value='$svt' name='svt' >
                        </td>
                       
                    </tr>
                    
                           
                </tbody>  
              
             
                
            </table>
        </div>
    </div>
</div>
          <center> <input  class='btn btn-success' type='submit'  name='update' value='update' > </center> 
            
            
            
              </form>
                ";
                
}
               
                if(isset($_POST['update'])){
              
                    
                     $en= $_POST['en'];  
                       $ar= $_POST['ar'];  
                         $fr= $_POST['fr'];  
                           $pc= $_POST['pc'];  
                             $svt= $_POST['svt'];  

     
                $up="UPDATE `note` SET `en`='$en',`ar`='$ar',`fr`='$fr',`pc`='$pc',`svt`='$svt' WHERE `id`='$idn'";
                $upq=$conect->query($up) ;
                if($upq){
                    echo ' <br>  <div class="col-md-8 offset-md-2"><div class="alert alert-success" role="alert"> ok note has been update </div>';
                } else {
                    // echo '<div class="alert alert-danger" role="alert"> error add</div></div>';    
                     die("error update".mysqli_error($conect));                
}}
                 
                ?>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


