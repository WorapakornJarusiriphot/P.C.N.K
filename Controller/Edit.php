<?php
include_once "../Model/ConDB.php";
include_once "../Model/Community.php";

$id = isset($_POST["id"]) ? $_POST["id"] : 'ค่าเริ่มต้น';
$name = isset($_POST["name"]) ? $_POST["name"] : 'ค่าเริ่มต้น';
$activity = isset($_POST["activity"]) ? $_POST["activity"] : 'ค่าเริ่มต้น';
$location = isset($_POST["location"]) ? $_POST["location"] : 'ค่าเริ่มต้น';
$images = isset($_POST["images"]) ? $_POST["images"] : 'ค่าเริ่มต้น';


$obj_name = new Community();
$rs2 = $obj_name->UpdateCommunity(
    $id, $name, $activity, $location, $images
);

header("Location: ../index.php");
exit;
?>