<?php
$small = "gallery_img/small/";
$big = "gallery_img/big/";
$files = array_slice(scandir($small), 2);

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('gallery.tmpl');

    echo $template->render(array(
        'big' => $big,
        'small' => $small,
        'files' => $files
    ));

?>
