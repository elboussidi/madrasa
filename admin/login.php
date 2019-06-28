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

 session_start() ;
 if(isset($_SESSION['lev'] )){
  if($_SESSION['lev'] == "prof" or $_SESSION['lev'] == "derecteur" ){
        header("location:../index.php");
 }}
?>
  
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
    <?php   include '../header.php'; ?>
    <br><br><br><br><br>
     <div class="col-md-8 offset-md-2">
    <?php 
    

  
    if(isset($_POST['login'])){
    $email=$_POST['email-address'];
      $password=$_POST['password'];
      
     
      $log="SELECT * FROM `usr` WHERE `email`='$email'AND `password`='$password'";
      
    $logqr=$conect->query($log) ;
    
    if($logqr){
         if($logqr->num_rows > 0);
        while ($row = $logqr->fetch_assoc()) {
                $_SESSION['email']=$row['email'];
                $_SESSION['name']=$row['name'];
                $_SESSION['id']=$row['id'];
                $_SESSION['lev']=$row['lev'];
                
         }//END WHILE
          
         if ($_SESSION['lev']=="derecteur" OR $_SESSION['lev']=="prof"){
             echo '<div class="alert alert-success" role="alert">
 your login is done redirect to admin page
</div>';
             echo '<meta http-equiv="refresh" content="4; \'/madrasa/admin/index.php\' /> ';
         } else {
             echo '<div class="alert alert-danger" role="alert">
 sorry eroor password or username !
</div> ';
         }
          
      }//END IF $logqr
      }// END IF ISSET
    
    ?>
    
     </div>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">login</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="login"  value="login" class="btn btn-primary">
                                    
                                
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

    

    
        


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>






