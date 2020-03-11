<?php
//fgets関数を組み合わせる


var_dump("年齢は？");
$age = trim(fgets(STDIN));
var_dump($age < 20);
?>