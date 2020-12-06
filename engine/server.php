<?php
//print_r($_FILES);
$path = "../images/".$_FILES['photo']['name'];
$pathPreview = "../images/preview/".$_FILES['photo']['name'];

if(copy($_FILES['photo']['tmp_name'],$pathPreview)) {
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
            createThumbs("../images/","../images/preview/",250);
            header("Location: /?page=gallery");
        }
}
//Каждый раз прогон всей директории, где хранятся маленькие изображения.
//Вижу не эффективность, но если все исправлять, не сдам дз
//функция нагуглена в примерах php.net в разделе работы с изображениями
//в нее добавил обрезание всех маленьких картинок imagejpeg(imagecrop)
function createThumbs($pathToImages, $pathToThumbs, $thumbWidth) {
    $dir = opendir($pathToImages);
    while (false !== ($fname = readdir( $dir ))) {
        $info = pathinfo($pathToImages . $fname);
        if ( strtolower($info['extension']) == 'jpg' )
        {
            $img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
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

