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