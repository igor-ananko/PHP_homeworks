
<h1 class="h1_gallery">Фотогаллерея</h1>
<div class="photogallery">
<?php
if(isset($_GET['file'])){?>
    <div class="item"><img src="images/<?= $_GET['file']?>" alt=""><br>
    <a class="menuLinks" href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a></div>
<?php
} else{
    $images = scandir("images/");
    $imagesPreview = scandir("images/preview/");
    for($i=2;$i<count($imagesPreview);$i++){?>
            <div class="item"><a href="?page=gallery&file=<?= $imagesPreview[$i]?>"><img src="images/Preview/<?= $imagesPreview[$i]?>" alt=""></a></div>
        <?php
    }
}
?>
</div>
<?php

?>