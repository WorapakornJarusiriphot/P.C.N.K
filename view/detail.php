
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
    include_once '../Model/ConDB.php';
    include_once '../Model/Community.php';
    if (isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $obj_name = new Community();
        $rs = $obj_name->getCommunity($id);

        if (isset($_GET["images"])) {
            echo '<img src="../upload/' .  $rs['images'] . ' " alt="image" style="width:250px">';
        }
    } else {
        echo 'ID ไม่มา';
    }
    ?>
    
    <?php include_once '../component/navbar.php' ?>
    <div class="bodyForm">
        <div class="containerDetail">
            <div class="leftDetail">
                <img src="../upload/<?= $rs ['images'] ?>" alt="image" style="width:350px">
            </div>
            <div class="rightDetail">
                <h4><?= $rs ['name'] ?></h4>
                <h4><?= $rs ['activity'] ?></h4>
                <h4><?= $rs ['location'] ?></h4> 
                <div class="form-group">
                    <div class="positionCenter">
                        <a href="#"><button id="confirm" type="button" class="buttonGreen" >จอง</button></a>&nbsp;&nbsp;
                        <a type="button" class="buttonYellow" href="./UpdateCommunity.php?id=<?= $rs ['id'] ?>">แก้ไข</a>
                        <a id="delete" type="button" class="buttonRed" onclick="return confirm('คุณต้องการจะลบข้อมูลชุดนี้หรือไม่? แน่ใจนะ!!')" href="../Controller/Delete.php?id=<?= $rs ['id'] ?>">ลบ</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../confirm.js"></script>
    </div>
    </div>
</body>
</html>

