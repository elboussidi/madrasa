 <?php
require 'connect.php';

?>
<?php

$usr="CREATE TABLE `usr` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(80) NOT NULL , `photo` INT(220) NOT NULL , `email` VARCHAR(80) NOT NULL , `password` VARCHAR(80) NOT NULL , `lev` VARCHAR(80) NOT NULL , `phone` INT(10) NOT NULL , `date_b` DATE NOT NULL , `date_c` TIMESTAMP NOT NULL , `gender` VARCHAR(80) NOT NULL , `position` VARCHAR(80) NOT NULL , `bio` VARCHAR(80) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

$usrq= mysqli_query($conect, $usr);
if($usrq){
    echo "table user done";
} else {
    die("dont creted".mysqli_error($conect));
}

$note="CREATE TABLE `note` ( `id` INT(58) NOT NULL , `name` VARCHAR(80) NOT NULL , `en` INT(89) NOT NULL , `ar` INT(60) NOT NULL , `fr` INT(66) NOT NULL , `pc` INT(80) NOT NULL , `svt` INT(55) NOT NULL ) ENGINE = InnoDB";
      
$noteq= mysqli_query($conect, $note);
if($noteq){
    echo " <br>table note done";
} else {
    die("dont creted2222".mysqli_error($conect));
}  