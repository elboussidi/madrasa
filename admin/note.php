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
    <title>note</title>
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
      <a class="nav-link"   href="member.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false">member</a>
      <a class="nav-link"  href="student.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">student</a>
     <a class="nav-link" href="note.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">note</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
        
        
        <div class="col-9">
        <div class="panel -info">
       
     
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
           <table class="table">
                <thead>
                    <tr>
                        <th>
                           #
                        </th>
                        <th>
                           name
                        </th>
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
                              <th>
                            moyen
                        </th>
                               <th>
                          resaulte
                        </th>
                    </tr>
                </thead>
                <tbody>
            
          <?php
          $rednot="SELECT * FROM `note`";
          
           $rednotq=$conect->query($rednot) ;
                if($rednotq){
                    while ($row1=mysqli_fetch_assoc($rednotq)) {
            $id1=$row1['id'];
            $name1=$row1['name'];
            
              $en1=$row1['en'];
                  $ar1=$row1['ar'];
                    $fr1=$row1['fr']; 
                    $pc1=$row1['pc'];
                        $svt1=$row1['svt']; 
                         $total= mysqli_num_rows($rednotq);
$m=($en1+$fr1+$pc1+$svt1+$ar1)/5;
if($m<=10){
    $res="راسب";
} else {
   $res="ناجح";  
}

                        echo "
                    <tr class='active'>
                        <td>
                           $id1
                        </td>
                        <td>
                           $name1
                        </td>
                        <td>
                            $en1
                        </td>
                          <td>
                          $ar1
                        </td>  <td>
                           $fr1
                        </td>  <td>
                           $pc1
                        </td>  <td>
                           $svt1
                        </td>
                        <td>
                           $m
                        </td>
                          <td>
                           $res
                        </td>
                    </tr>
                    
                    
                    
                    
                </tbody>
     
     ";} }
 echo "total note save : " . $total ;
               ?>      
                    
             </table>
        </div>
</div>
</div>
       
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


