<?php
function hiddenLink($authorised, $productid) {
    if ($authorised) {
        $cartLink = '<a href="/?page=cart&productid=' . $productid . '" class="productLink">Купить</a>';
    } else {
        $cartLink = '<a href="/?page=login" class="productLink">Войти в систему</a>';
    }
    return $cartLink;
}