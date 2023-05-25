<?php
$fruits = ["apple"=>"りんご", "orange"=>"みかん", "peach"=>"もも"];

$message = "といったら";

foreach ($fruits as $key => $value) {
  echo $key;  
  echo $message;
  echo $value;
  echo '<br>';
}
?>