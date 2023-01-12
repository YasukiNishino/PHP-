<?php
//連想配列
$student = ["name" => "Andy" , "age" => 20];
//連想配列の要素変更
$student["age"] = 21;
echo $student["age"] . PHP_EOL;
$student["name"] = "Betty";
echo $student["name"] . PHP_EOL;