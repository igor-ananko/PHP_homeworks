<?php
include "engine/config.php";

if(isset($_GET['fileid'])){
    $img = $_GET['fileid'];
    $sql = "SELECT id, path, hits FROM images WHERE id=$img";
    $res = mysqli_query($dbConnect,$sql);
    $data = mysqli_fetch_assoc($res);
    $hits = ++$data['hits'];
    $sqlHits = "UPDATE images SET hits=$hits WHERE id=$img";
    mysqli_query($dbConnect,$sqlHits);?>
    <h1 class="h1_gallery">Фотогаллерея</h1>
    <div class="photogallery_large">
        <img class="item_large" src="<?= $data['path']?>" alt=""><br>
        <a class="menuLinks" href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a><br>
        <p>Просмотров: <?= $hits?> </p> </div>
<?php
}
    else { ?>
        <h1 class="h1_gallery">Фотогаллерея</h1>
        <div class="photogallery">
        <?php
        $sql = "SELECT * FROM images ORDER BY hits DESC";
        $res = mysqli_query($dbConnect,$sql);
        while($data = mysqli_fetch_assoc($res)):?>
            <div class="item"><a href="?page=gallery&fileid=<?= $data['id']?>"><img src="<?= $data['pathPreview']?>" alt=""></a></div>
        <?php
            endwhile;
            ?>
<?php
}
?>
        </div></div>
