<?php
    $x = 5.2;

    echo ceil($x); //切り上げ 
    echo '<br/>';
    echo floor($x); //切り捨て
    echo '<br/>';
    echo round($x); //四捨五入
    echo '<br/>';
    echo mt_rand(1, 100); //乱数

    $str = "hogehoge";
    echo strlen($str); //文字列の長さ
?>