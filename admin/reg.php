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
 //   echo 'تم الاتصال بنجاح  ';
 }

  
?>
<!DOCTYPE html>
<html lang="en">
    <title>regester page</title>
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
    <style>
        
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
    </style>
</head>


<body style="background-color: #e9ecef;">
     <?php   include '../header.php'; ?>
    

    
    
    
    <?php//PROGAME REGESTER PAGE SEND INFO TO DATABASE    $first_name=$_POST['first_name'];
     //   $last_name=$_POST['last_name'];
       // $email=$_POST['email'];
       // $password=$_POST['password'];
       // $password2=$_POST['password_confirm'];
      session_start();
if(isset($_SESSION['lev'] )){
$lev=$_SESSION['lev'];


}
if($lev !="derecteur"){
    header("location:../index.php");
}
   ?>
    
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h6><?php echo $lev; ?></h6>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">usre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">student</a>
                            </li>
                        </ul><form method="" action="../config.php" enctype="multipart/form-data" >
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">regester as user</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="uname"placeholder="First Name *" value="" />
                                        </div>
                                      
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="upassword"placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="upassword2" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="udate" placeholder="date" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio"  name="ugender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio"  name="ugender"value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control"name="uemail" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" minlength="10" maxlength="10" name="uphone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="urole">
                                                <option class="hidden"  selected disabled>Please select your role</option>
                                                <option>derecteur</option>
                                                <option>prof</option>
                                                <option>student</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">IMG PROFILE</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input"name="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label"  for="inputGroupFile01">Choose file</label>
  </div>
</div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="position" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="reg" value="Register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">regester as student</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`position" value="" />
                                        </div>
                                    
                                    <input type="submit" class="btnRegister"  name="reg" value="Register"/>
                                    </div>
                                </div>
                            </div></form>
                        </div>
                    </div>
                </div>

          <?php
          
    if(isset($_POST['reg'])){

    echo 'dsdsdsdsddsds';
        header("location:index.php");
    }//end frist if
    
    ?>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    


    </body>
</html>








