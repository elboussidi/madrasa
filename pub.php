<?php  require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <title>resulte</title>
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


<style>
    #prof{
        margin-left:6%;
        float: left;
    }
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
    margin-left: 55%;
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
    width: 50%;
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
body{
    width: 90%;
    margin:  0 auto ;
   
}
</style>

<body dir="rtl" >
 
    
     <!--------------------- red info  ------------------------------>
     
  
      
        <center >
           
 

   <?php 
    if(isset($_POST['submit'])){ 
        $name=$_POST['name'] ;
        
       
    if($name==""){
          die(' <br><div class="alert alert-danger">لايمكن ترك حقل البحث فارغ</div>') ;
    }
       
        
    else { 
//   '%".$id."%'"
         
    $red="select * from note where name =  '$name'" ;
    $result= mysqli_query($conect, $red) ;
    if(!$result){
        die('<div class="no">تعدر الوصول الي البيانات</div>') ;
    }

 
     }
        
    }
        
    ?>
     
      
    
    <?php 
   if(isset($_POST['submit'])){ 
       
        
    while ($row= mysqli_fetch_assoc($result)){
        
         $en=$row['en'];
       $ar=$row['ar'];
        $id=$row['id'];
        $fr=$row['fr'];
        $prof=$row['prof'];
        $pc=$row['pc'];
        $svt=$row['svt'];
       $m=($en+$fr+$pc+$svt+$ar)/5;
      $dd=date("d-m-Y");
if($m<=10){
    $res="<div> راسب</div>";
} else {
$res="<div> ناجح </div>";}
        echo " 
            <br><br> <hr>
            <div class='a'>  المملكة المغربية <br> وزارة التربية و التعليم <br>اكاديمية مراكش-اسفي </div>
   <img alt='logo' src='admin/2000px-Coat_of_arms_of_Morocco.svg.png' style='width: 100px ; height: 100px'>
   <table>
         <div class='dat'> بتاريخ :<br>$dd </div><br>
          <h3> بيان نقط المراقبة المستمرة </h3>
          
 

          <div class='name'> اسم الطالب :  $name  <br><br>   الرقم الوطني :$id </div><br><div id='prof'>  الاستاد: $prof  </div> <br> 
          <hr style='width: 50%;' ><br><br> 


 <table>
  <tr>
          <th>المادة </th>
       <th>النقطة </th>
       
  </tr> 
  <tr>
                   <th>العربية</th>
        <th>$ar </th>

  </tr>
  <tr>
   <th>الفرنسية</th>
        <th>$fr</th>
       
 </tr>  
     <tr>
     <th>انجليزية</th>
        <th>$en</th>
        
 </tr>
  <tr>
     <th>العلوم الطبيعية</th>
        <th>$svt</th>
        
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
     
  <br><br> <div class='not'> نتيجة : $res </div>
  
  <br><br><hr> 
       " ;
        

   
  } }

    ?>
         <form  method="POST"  action="">

       <br><div class="input-group mb-3" style=" width:50% ;">
  <input type="text"  name="name" class="form-control" placeholder="your name her" >
  <br>
   <input class="btn btn-outline-secondary"  type="submit"  name="submit" value="بحث" > 
  </div>
</div>
    
     </center>
     <br>
   </div>              
    

<?php mysqli_close($conect) ?>
     <?php include '../footer.php'; ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>


    </body>
</html>



