
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
    // include_once "../Model/ConDB.php";
    // include_once "../Model/Community.php";

    // if (isset($_GET["id"])) {
    //     $id = htmlspecialchars($_GET["id"]);
    //     $obj_name = new Community();
    //     $rs2 = $obj_name->getCommunity($id);
    // } else {
    //     echo 'ID ไม่มา';
    // }

    ?>

    <?php
    include_once '../Model/ConDB.php';
    include_once '../Model/Community.php';
    if (isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $obj_name = new Community();
        $rs2 = $obj_name->getCommunity($id);

        if (isset($_GET["images"])) {
            echo '<img src="../upload/' .  $rs2['images'] . ' " alt="image" style="width:250px">';
        }
    } else {
        echo 'ID ไม่มา';
    }
    ?>
    <?php include_once '../component/navbar.php' ?>
    <div class="bodyCard">
        <h1><?= $rs2['location']; ?></h1>
        <a id="confirm" type="button" class="buttonGreen"  href="./CreateCommunity.php?location=<?= $rs2['location']; ?>">Create</a>
        <div class="rowCard">
            <div class="columnCard">
                <div class="card">
                    <img src="../upload/<?= $rs2['images'] ?>" alt="image" style="width:250px">
                    <p><?= $rs2['name'] ?></p>
                    <p><?= $rs2['activity'] ?></p>
                    <a type="button" class="buttonGreen" href="./detail.php?id=<?= $rs2['id'] ?>">Info</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>