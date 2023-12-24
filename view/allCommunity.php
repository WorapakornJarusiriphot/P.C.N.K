<?php
include_once "Model/ConDB.php";
include_once "Model/Community.php";

$obj_name = new Community();
$rs2 = $obj_name->getALL();

foreach ($rs2 as $result2) {
?>

    <div class="columnIndex">
        <a href="./view/card_detail.php?id=<?= $result2['id'] ?>">
            <div class="cardIndex cardIndexImages" style="background-image: url(./upload/<?= $result2['images'] ?>);">
                <?= $result2['location'] ?>
            </div>
        </a>
    </div>

<?php } ?>