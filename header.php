 <?php require 'config.php ';

session_start() ;?>

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
              <a class="nav-link" href="http://localhost/madrasa/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
   <a class="nav-link " href="http://localhost/madrasa/admin/index.php"  >admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#price">Price</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#business">Business</a> 
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              
          </ul>
           <?php 
           if(isset($_SESSION['lev']) ){
               
          
           
           if ($_SESSION['lev']=="derecteur" or $_SESSION['lev']=="prof"){
               $sname=$_SESSION['name'];
              
               $id=$_SESSION['id'];
             echo "
          <a href='prof.php?id=$id'> <button class='btn btn-outline-success my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#exampleModal'>  $sname </button></a>
            &emsp;    <a href='logout.php'> <button class='btn btn-outline-danger my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#exampleModal'>log out</button></a>
               ";
           } }
         else {
             echo '
                    <a href="admin/login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">Sign in</button></a>
          &emsp;
          <a href="admin/reg.php">   <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">Sign up</button></a>
            
                     ';
        
          } 
           ?>
           
        </div>
      </nav>   

