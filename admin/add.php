 <?php
require '../connect.php';

?>
<!DOCTYPE html>
<html lang="en">
    <title>add note</title>
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
        .in{
            width: 50%;
        }
    </style>
    
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
      <a class="nav-link"   href="member.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false">member</a>
      <a class="nav-link"  href="student.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">student</a>
     <a class="nav-link" href="note.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">note</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
        <div class="col-9">
        <div class="panel -info">
       
     
<?php   
if(isset($_GET['id']) and isset($_GET['name'])  ) {
$idn=$_GET['id'];
$namen=$_GET['name'];
}
?>




<div class="container">
    <div class="row">
        <div class="col-md-12">
                        <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
            <table class="table">
                <thead>
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
                <form  method="POST">
                    <tr class="active">
                       
                        <td>
                          <input class="in" type="text"  name="en" >
                        </td>
                        <td>
                         <input class="in" type="text"  name="ar" >
                        </td>
                          <td>
                          <input class="in" type="text"  name="fr" >
                            
                        </td>  <td>
                            <input class="in" type="text"  name="pc" >
                        </td>  <td>
                          <input class="in" type="text"  name="svt" >
                        </td>
                       
                    </tr>
                    
                           
                </tbody>  
              
             
                
            </table>
        </div>
    </div>
</div>
          <center> <input  class="btn btn-success" type="submit"  name="add" value="add" > </center> 
            
            
            
              </form>
                
                
                
                <?php 
                if(isset($_POST['add'])){
               
                     $en= $_POST['en'];  
                       $ar= $_POST['ar'];  
                         $fr= $_POST['fr'];  
                           $pc= $_POST['pc'];  
                             $svt= $_POST['svt'];  
                             
                             
$tst="SELECT * FROM `note`";
$qtst= mysqli_query($conect, $tst);
if($qtst){
     while ($row2=mysqli_fetch_assoc($qtst)) {
         $nametst= $row2['name'];

}
if($namen == $nametst){
     echo ' <br>  <div class="col-md-8 offset-md-2"><div class="alert alert-danger" role="alert"> this item alredy in table <br> thank your for call programer 0677076287</div>';
} else {
    

     
                $ad="INSERT INTO `note` (`id`, `name`,`en`, `ar`, `fr`, `pc`, `svt`) VALUES ('$idn', '$namen', '$en', '$ar', '$fr', '$pc', '$svt')";
                $adq=$conect->query($ad) ;
                if($adq){
                    echo ' <br>  <div class="col-md-8 offset-md-2"><div class="alert alert-success" role="alert"> ok note has been added </div>';
                } else {
                    // echo '<div class="alert alert-danger" role="alert"> error add</div></div>';    
                     die("error add".mysqli_error($conect));                
}}}
                 }
                ?>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


