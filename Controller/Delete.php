<?php
include_once "../Model/ConDB.php";
include_once "../Model/Community.php";

$id = htmlspecialchars($_GET["id"]);
$obj_name = new Community();
$rs2 = $obj_name->DelCommunity($id);

header("Location: ../index.php");
exit;
?>