<div class="catalog">
<?php
include "engine/config.php";

if(isset($_GET['productid'])) {
    $sql = "SELECT * FROM catalog WHERE id=".$_GET['productid'];
    $res = mysqli_query($dbConnect,$sql);
    $product = mysqli_fetch_assoc($res); ?>
    <div class="productFull">
        <div class="productName"><?= $product['name']?></div>
        <img class="productPic" src="../images/<?= $product['picture']?>" alt="<?= $product['name']?>">
        <div class="productShortDesc"><?= $product['description']; ?></div>
        <div class="productPrice"><?= $product['price']?>&nbsp;рублей/килограмм</div>
        <a href="#" class="productLink">Купить</a>
    </div>
    <?php
} else {
    $sql = "SELECT * FROM catalog";
    $res = mysqli_query($dbConnect,$sql);
    while($products = mysqli_fetch_assoc($res)) { ?>
        <div class="product">
            <div class="productName"><?= $products['name']?></div>
            <img class="productPicPreveiw" src="../images/preview/<?= $products['picture']?>" alt="<?= $products['name']?>">
            <div class="productShortDesc"><?= mb_strimwidth($products['description'], 0, 200, "..."); ?></div>
            <div class="productPrice"><?= $products['price']?>&nbsp;рублей/килограмм</div>
            <a href="?page=catalog&productid=<?= $products['id']?>" class="productLink">Подробнее</a>
        </div>
    <?php
    }
}
?>

</div>
