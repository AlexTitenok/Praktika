<?php
$id = $_GET ['id'];
echo $id;

require ("config.php");
$connect = new mysqli(HOST, USER, PASS, DB);

$connect-> set_charset ("UTF8");

$sql = "SELECT * FROM `students` WHERE `student_id` = $id";
$connect-> query ($sql);

