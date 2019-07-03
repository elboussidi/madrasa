 <?php
require '../connect.php';

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
<style>
    
    .t{
      direction: rtl;
      border-left: 1px solid #0062cc;
    }  
.a {
    float: right ;
    width: 20%;
    font-size: 12px;
    padding-right: 4%;
}
.img{
    margin-left: 60%;
}
.dat {
    float:left ;
    width: 20% ;
    margin-left: 30px;
}

.name {
    float: right;
    text-align: right ;
    margin-right: 50px;
    width: auto;
}


.not{    margin-left: 60%;}

table {
    width: 75%;
   border-collapse: collapse ;
    padding: 5px;
     margin-right: 10%;
}

table tr td{
    border: 1px solid #500a0a ;
    padding: 7px; text-align: center;
    padding: 7px;
}table tr th{
    border: 1px solid #500a0a ;
    padding: 7px; text-align: center;
    padding: 7px;
}
</style>

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
     <a class="nav-link" href="mynote.php?id=<?php echo $_SESSION['id']; ?>" role="tab" aria-controls="v-pills-settings" aria-selected="false">MY NOTE</a>
    </div>
  </div>
       
        <div class="col-9">
        <div class="panel -info">
            <div class="t"> 
      <?php 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
         $red2="select * from usr where id =  '$id'" ;
    $result2= mysqli_query($conect, $red2) ;
    if($result2){
        while ($row1 = mysqli_fetch_array($result2)) {
            $name2=$row1['name'];
        }
    }
         $red="select * from note where id =  '$id'" ;
    $result= mysqli_query($conect, $red) ;



    while ($row= mysqli_fetch_assoc($result)){


      // $dat=$row['dat add'];
       $en=$row['en'];
       $ar=$row['ar'];
        $id=$row['id'];
        $fr=$row['fr'];
       // $name=$row['name'];
        $pc=$row['pc'];
        $svt=$row['svt'];
       $m=($en+$fr+$pc+$svt+$ar)/5;
      $dd=date("d-m-Y");
if($m<=10){
    $res="<div> راسب</div>";
} else {
   $res="<div> ناجح </div>";
   
   echo "
            <br>
         <div class='a'>  المملكة المغربية <br> وزارة التربية و التعليم <br>اكاديمية مراكش-اسفي </div>
   <img alt='logo' src='2000px-Coat_of_arms_of_Morocco.svg.png' style='width: 100px ; height: 100px ; margin-left: 20%;'>
   <table>
         <div class='dat'> بتاريخ : $dd<br> </div><br>
          <h3 style=' margin-left: 30%;'> بيان نقط المراقبة المستمرة </h3>



          <div class='name'> اسم الطالب : $name2 <br><br>   الرقم الوطني :$id </div><br><br> <br><br>
          <hr style='width: 60%;' ><br><br>


 <table>
          <th>المادة </th>
       <th>النقطة </th>

  </tr>
  <tr>
                   <th>العربية</th>
        <th>$ar </th>

  </tr>
  <tr>
   <th>الفرنسة</th>
        <th>$fr</th>

 </tr>
     <tr>
     <th>انجليزية</th>
        <th>$en</th>

 </tr
 
     <tr>
     <th>ع طبيعية</th>
        <th>$en</th>

 </tr>
 
     <tr>
     <th>الفزياء</th>
        <th>$pc</th>

 </tr>


<tr>
                <th>المعدل</th>
        <th>$m</th>

 </tr>
 </table>
<br><br>
<div class='not'> نتيجة : $res </div>
    <br><br><hr>
  

       " ;


  }
 }         }
  
        ?>
        
                
           </center>
            </div>

        </div>
	</div>

        
        

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


