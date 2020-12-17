<?php
include "engine/config.php";
include "engine/hidden_link.php";
?>
<div class="catalog">
    <?php
    if(isset($_GET['productid'])) {
        $sql = "SELECT * FROM catalog WHERE id=".$_GET['productid'];
        $res = mysqli_query($dbConnect,$sql);
        $product = mysqli_fetch_assoc($res); ?>
        <div class="productFull">
            <div class="productName"><?= $product['name']?></div>
            <img class="productPic" src="../images/<?= $product['picture']?>" alt="<?= $product['name']?>">
            <div class="productShortDesc"><?= $product['description']; ?></div>
            <div class="productPrice"><?= $product['price']?>&nbsp;рублей/килограмм </div>
            <?= hiddenLink($_SESSION['login'], $product['id'])?>
        </div>
        <?php
    } else {
        $sql = "SELECT * FROM catalog";
        $res = mysqli_query($dbConnect,$sql);
        while($product = mysqli_fetch_assoc($res)) { ?>
            <div class="product">
                <div class="productName"><?= $product['name']?></div>
                <img class="productPicPreveiw" src="../images/preview/<?= $product['picture']?>" alt="<?= $product['name']?>">
                <div class="productShortDesc"><?= mb_strimwidth($product['description'], 0, 200, "..."); ?></div>
                <div class="productPrice"><?= $product['price']?>&nbsp;рублей/килограмм</div>
                <a href="?page=catalog&productid=<?= $product['id']?>" class="productLink">Подробнее</a>
                <?= hiddenLink($_SESSION['login'], $product['id'])?>
            </div>
            <?php
        }
    }
    ?>

</div>

