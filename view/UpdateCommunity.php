<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>


<?php
include_once "../Model/ConDB.php";
include_once "../Model/Community.php";

$id = htmlspecialchars($_GET["id"]);
$action = isset($_GET["action"]) ? $_GET["action"] : '';

$obj_name = new Community();
$rs = $obj_name->getCommunity($id);

if ($action == 'edit') {
    $data = [
        'name' => $_POST['name'],
        'activity' => $_POST['activity'],
        'location' => $_POST['location'],
        'images' => $_POST['images']
    ];
$result = $re->UpdateCommunity($id , $data);
// echo $result ? "<p>มี $id</p>" : "<p>ไม่มี</p>";

header("Location: ../index.php");
exit;
}
?>
    <?php include_once '../component/navbar.php' ?>
    <div class="bodyForm">
    <div class="containerForm">

        <form name="update" action="../Controller/Edit.php" id="update" method="post" enctype="multipart/form-data">

        <input name="id" id="id" value="<?php echo $rs ['id'] ?>" type="hidden">

            <h1 class="center">Update</h1>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" value="<?php echo $rs ['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="activity">Activity :</label>
                <input type="text" name="activity" id="activity" value="<?php echo $rs ['activity'] ?>" required>
            </div>
            <div class="form-group">
                <label for="location">Location :</label>
                <input type="text" name="location" id="location" value="<?php echo $rs ['location'] ?>" required>
            </div>
            <div class="form-group">
                <label for="images">image :</label>
                <input type="text" name="images" id="images" value="<?php echo $rs ['images'] ?>" required>
            </div>
            <div class="form-group">
                <div class="positionCenter">
                    <button type="submit" class="buttonGreen">Update</button>
                </div>
            </div>
        </form>

    </div>
    </div>
    </div>
    </div>
</body>
</html>