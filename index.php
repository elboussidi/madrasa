<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <title>home page</title>
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>



<?php
require 'connect.php';

?>

<body >
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#myinfo"> <i class="fa fa-home fa-2x"  aria-hidden="true"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span > <i class="fa fa-home" aria-hidden="true"></i>menu
          </span>
        </button>
      
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mr-auto "  >
            <li class="nav-item   ">
                <a class="nav-link" href="../madrasa/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="admin/index.php"  >admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">Contact</a>
              </li> <li class="nav-item">
                <a class="nav-link" href="#business">Business</a> 
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#price">aboute</a>
              </li>
             
          </ul>
           <?php 
           if(isset($_SESSION['lev']) ){
               
          
           
           if ($_SESSION['lev']=="derecteur" or $_SESSION['lev']=="prof" or $_SESSION['lev']=="student"){
               $sname=$_SESSION['name'];
              
               $id=$_SESSION['id'];
             echo "
          <a href='admin/prof.php?id=$id'> <button class='btn btn-outline-success my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#exampleModal'>  $sname </button></a>
            &emsp;    <a href='admin/logout.php'> <button class='btn btn-outline-danger my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#exampleModal'>log out</button></a>
               ";
           } }
         else {
             echo '
                    <a href="admin/login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">Sign in</button></a>
          &emsp;
          <a href="admin/reg.php">   <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">Sign up</button></a>
                      &emsp;
          <a href="pub.php">   <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">note</button></a>
                     ';
        
          } 
           ?>
           
        </div>
      </nav>   



      <article id="myinfo">
          
            
      
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  
      
              
       <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">test </button>
                <div class="carousel-item active">
                  <img class="d-block w-100 mysize" src="1.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                      
                      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">2</button>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 mysize" src="2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                       <button class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">3</button>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
         
      
              </div>
        
            </div>
      
       
          </article>


<section id="contact">



        <div class="container">

<div class="myBtoo">
        <h4 class="myText "><span class="">Lorem Ipsum</span></h4>
            
                    <p class="myText"><span class="">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span> </p>
            </div>


                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6 mypadding">
<form>
        <div class="form-group">
        <input type="text" class="form-control"    placeholder="Enter your name">
          <br> 
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            
            <textarea type="text" class="form-control"   placeholder="write you comments please"></textarea>
        </div>
        
        <button type="submit" class="btn btn-outline-info">Send</button>
        </form>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6 mypadding">
                  
                    
<p class="my-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
</p>

<ul class="mylist myBtoo">
    
        <li>
            Address:  Lorem Ipsum is simply dummy text of the printing      
    </li>
   <li>
        Tel : 1213 123213 123213
        </li>
        <li>
                Tel : 1213 123213 123213
                </li>
                <br>
      <li>
    <a href="#">  <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a>   
   </li>

        <br>
     
    </ul>



                  </div>
                </div>
                 
              </div>


</section>


    <?php include 'footer.php'; ?>
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>


    </body>
</html>
