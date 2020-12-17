<?php
include "config.php";

$path = translit("../images/".$_FILES['photo']['name']);
$pathPreview = translit("../images/preview/".$_FILES['photo']['name']);

if(copy($_FILES['photo']['tmp_name'],$pathPreview)) {
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
            $sql= "INSERT INTO images (path, pathPreview) VALUES ('$path', '$pathPreview')";
            mysqli_query($dbConnect,$sql);
            createThumbs("../images/","../images/preview/",250);
            header("Location: /?page=gallery");
        }
}

function createThumbs($pathToImages, $pathToThumbs, $thumbWidth) {
    $dir = opendir($pathToImages);
    while (false !== ($fname = readdir( $dir ))) {
        $info = pathinfo($pathToImages . $fname);
        if (strtolower($info['extension']) == 'jpg')
        {
            $img = imagecreatefromjpeg("{$pathToImages}{$fname}");
            $width = imagesx( $img );
            $height = imagesy( $img );
            $new_width = $thumbWidth;
            $new_height = floor( $height * ( $thumbWidth / $width ) );
            $tmp_img = imagecreatetruecolor( $new_width, $new_height );
            imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
            imagejpeg(imagecrop($tmp_img, ['x' => 0, 'y' => 0, 'width' => 250, 'height' => 140]), "{$pathToThumbs}{$fname}" );
        }
    }
    closedir( $dir );
}

function translit($string) {
    $translit = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ы' => 'y', 'ъ' => '', 'ь' => '', 'э' => 'eh', 'ю' => 'yu', 'я'=>'ya');

    return str_replace(' ', '_', strtr(mb_strtolower(trim($string)), $translit));
}
