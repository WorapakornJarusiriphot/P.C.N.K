
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
?>
    <?php include_once '../component/navbar.php' ?>
    <div class="bodyForm">
    <div class="containerForm">
        <form name="create" action="../Controller/Add.php" id="create" method="post" enctype="multipart/form-data">
            <h1 class="center">Create</h1>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" placeholder="Commmunity_name" required>
            </div>
            <div class="form-group">
                <label for="activity">Activity :</label>
                <input type="text" name="activity" id="activity" placeholder="activity" required>
            </div>
            <div class="form-group">
                <label for="location">Location :</label>
                <input type="text" name="location" id="location" placeholder="location" required>
            </div>
            <div class="form-group">
                <label for="location">image :</label>
                <input type="text" name="images" id="images" placeholder="image"  accept="image/*" required>
            </div>
            <div class="form-group">
                <div class="positionCenter">
                    <button type="submit" class="buttonGreen">Create</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>
</html>