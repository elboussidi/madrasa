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
  
  session_start();
  
?>   
<!DOCTYPE html>
<html lang="en">
    <title>member</title>
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
    
    
    <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active"  href="prof.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">profile</a>
      <a class="nav-link"  href="member.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false">member</a>
      <a class="nav-link"  href="student.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">student</a>
      <a class="nav-link"   href="note.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">note</a>
      <a class="nav-link" id="v-pills-settings-tab" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
        <div class="col-9">
        <div class="panel -info">
       
     <?php 
//            if(isset($_SESSION['lev'] )){
//       $lev=$_SESSION['lev'];
//       }
//       if($lev != "derecteur" ){
//           header("location:../index.php");
//         
//       }
            ?>
     <?php 
  
  
  $red="SELECT * FROM `usr` WHERE `lev`='student' ";
 $qq=$conect->query($red) ;
    if($qq){
      

   ?>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
		<h2>User <b>Management</b></h2>
			</div>
		<div class="col-sm-7">
                    <a href="reg.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
							
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>						
			<th>Date Created</th>
			<th>Role</th>
                        <th>email</th>
			<th>Action</th>
                    </tr>
                </thead>
                <?php  while ($row= mysqli_fetch_assoc($qq)) {
            $id=$row['id'];
              $name=$row['name'];
                  $email=$row['email'];
                    $lev=$row['lev']; 
                    $date_c=$row['date_c']; 
                    $newdat=mb_substr( "$date_c " , 0 , 11 , "utf8" );
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><a href="prof.php?id=<?php echo $id; ?>"> <?php echo $name;?></a></td>
                        <td><?php echo $newdat; ?></td>                        
                        <td><?php echo $lev;?></td>
		<td><span class="status text-success">&bull;</span><?php ?><?php echo $email;?> </td>
			<td>
			<a href="del.php?ids=<?php echo $id;?>" class="btn btn-secondary" title="Settings" data-toggle="tooltip"> del  </a>
                       <a href="add.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" > <button type="button" class="btn btn-secondary">add note</button></a> 
                        
						</td>
                    </tr>
		<?php  } }?>			   
        </div>    
        </div>
    
 


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


