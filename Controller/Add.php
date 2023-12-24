<?php
include_once "../Model/ConDB.php";
include_once "../Model/Community.php";

$name = isset($_POST["name"]) ? $_POST["name"] : 'ค่าเริ่มต้น';
$activity = isset($_POST["activity"]) ? $_POST["activity"] : 'ค่าเริ่มต้น';
$location = isset($_POST["location"]) ? $_POST["location"] : 'ค่าเริ่มต้น';
$images = isset($_POST["images"]) ? $_POST["images"] : '404.jpg';

$Community = array();
$Community["name"] = $name;
$Community["activity"] = $activity;
$Community["location"] = $location;
$Community["images"] = $images;

$obj_name = new Community();
$rs2 = $obj_name->AddCommunity($Community);

header("Location: ../index.php");
exit;
?>