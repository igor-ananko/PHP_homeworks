<?php
    $menu = ["Фотогаллерея" => ["/?page=gallery" => "_self"], "Загрузить фото" => ["/?page=load"=>"_self"], "Перейти в поисковик" => ["https://google.com"=>"_blank"]];
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
