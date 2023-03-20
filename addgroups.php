<?php
$name = stripcslashes(htmlspecialchars(trim ($_POST ['name'])));


require ("config.php");
$connect = new mysqli(HOST, USER, PASS, DB);
$connect-> set_charset ("UTF8");

$sql = "INSERT INTO `groups`(`name`) 
VALUES ('$name')";
$result = $connect -> query ($sql);
if($result){
    echo "Данные записаны";

}
  else{
      echo "Ошибка записи";
  }
