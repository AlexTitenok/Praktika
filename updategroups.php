<?php
$id = $_GET ['group_id'];
echo $id;

require ("config.php");
$connect = new mysqli(HOST, USER, PASS, DB);

$connect-> set_charset ("UTF8");

$sql = "SELECT * FROM `groups` WHERE `group_id` = $id";
$connect-> query ($sql);

