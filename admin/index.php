<?php
require '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">
    <title>admin page</title>
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
     <br><br><br>
  <?php include 'x.php'; ?>   
    
  
     <?php 
            if(isset($_SESSION['lev'] )){
       $lev=$_SESSION['lev'];
       }
       if($lev != "derecteur" ){
           header("location:../index.php");
         
       }
            ?>
               

    <!--  menu  -->
    
    <br><br>
    
    
    <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active"  href="prof.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">profile</a>
        <a class="nav-link"   href="member.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false">member</a>
        <a class="nav-link" href="student.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">student</a>
        <a class="nav-link" href="note.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">note</a>
      <a class="nav-link" href="mynote.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-settings" aria-selected="false">MY NOTE</a>
     </div>
  </div>
        <div class="col-8">
     
                  
        </div>    
        </div>
    
    
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script >
 
</script>

    </body>
</html>

