<?php
    include "engine/config.php";
    if($_GET['productid']){
        $sql = "SELECT * FROM catalog WHERE id=".$_GET['productid'];
        $res = mysqli_query($dbConnect,$sql);
        $product = mysqli_fetch_assoc($res);
        $_SESSION['catalog_id'] = $_GET['productid'];
    }?>

<?php
if($_GET['order'] === "done") {
    $_SESSION = array();
?>
    <h2>Спасибо за заказ!</h2>
    <div class="">Мы скоро свяжемся с вами</div>
<?php } else {?>
<div class="cart">
    <div>Корзина заказа</div>
    <form action="../engine/order_db.php" method="post">
    <div class="orderPic"><img class="productPic" src="../images/preview/<?= $product['picture']?>" alt="<?= $product['name']?>" width="140"></div>
    <div class="orderCount"><input name="count" type="number" min="1" max="10" style="width: 50px" value="1"></div>
    <div class="orderPrice"><?= $product['price']?>&nbsp;рублей/килограмм </div>
    <input type="submit" value="Отправить заказ">
</form>
</div>
<?php
    }
    ?>
