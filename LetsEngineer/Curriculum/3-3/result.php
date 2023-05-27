<?php
$my_name = $_POST['my_name'];
$number = $_POST['number'];

$range = mt_rand(1, 6);
$randomNumber = $number * $range;

    if (1< $randomNumber && $randomNumber < 10 ){
      $result = '凶';
    } else if  (11< $randomNumber && $randomNumber < 15){
      $result ='小吉';
    } else if  (16< $randomNumber && $randomNumber < 20){
      $result = '中吉';
    } else if  (21< $randomNumber && $randomNumber < 25){
      $result = '吉';
    } else if  (26< $randomNumber && $randomNumber < 36){
      $result = '大吉';
    }  else if  ($randomNumber < 37){
      $result = '残念';
    }


    date_default_timezone_set('Asia/Tokyo');
    print date('Y/m/d G:i:s');
    echo "<br>";
    print "名前は".$my_name. "です。"; 
    echo '<br>';
    print "番号は".$randomNumber."です。";
    echo '<br>';
    print "結果は".$result."です。";

?>


