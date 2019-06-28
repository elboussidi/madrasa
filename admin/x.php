
<!DOCTYPE html>
<html lang="en">
    <title>login page</title>
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
    
<?php
   $reddatad="SELECT * FROM `usr` WHERE `lev`='derecteur'" ;
   
 $qdatad=$conect->query($reddatad) ;
    if($qdatad){
         $totd= mysqli_num_rows($qdatad);
   
    
    }
?>
    <?php
   $reddatap="SELECT * FROM `usr` WHERE `lev`='prof' " ;
   
 $qdatap=$conect->query($reddatap) ;
    if($qdatap){
         $totp= mysqli_num_rows($qdatap);
   
    
    }
?>
    <?php
   $reddatas="SELECT * FROM `usr` WHERE `lev`='student' " ;
   
 $qdatas=$conect->query($reddatas) ;
    if($qdatas){
         $tots= mysqli_num_rows($qdatas);
       
    
    }
?>
<div class="container">
    <div class="row">
    <div class="col-md-2">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers"><?php echo $tots+ $totp + $totd;?></span>
        <span class="count-name">Users total</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers"><?php echo $tots;?></span>
        <span class="count-name">student</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers"><?php echo $totp;?></span>
        <span class="count-name">prof</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><?php echo $totd;?></span>
        <span class="count-name">directure</span>
      </div>
    </div>
  </div>
</div>



   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>


    </body>
</html>


