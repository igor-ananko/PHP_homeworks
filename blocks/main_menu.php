<?php
    $menu = ["Вход/Регистрация" => ["/?page=login" => "_self"], "Каталог товаров" => ["/?page=catalog" => "_self"], "Фотогаллерея" => ["/?page=gallery" => "_self"], "Загрузить фото" => ["/?page=load"=>"_self"], "Отзывы о компании" => ["/?page=otzyv"=>"_self"]];
?>
<ul class="headerMenu">
<?php
foreach($menu as $title => $link):
    foreach($link as $url => $target):?>
    <li><a href="<?= $url?>" class="menuLinks" target="<?= $target?>"><?= $title?></a></li>
<?php
    endforeach;
    endforeach;
?>
</ul>