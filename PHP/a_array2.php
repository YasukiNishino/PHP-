<?php
//連想配列の要素追加
$student = ["name" => "Andy" , "age" => 20];
$student["height"] = 180;
echo $student["height"] . PHP_EOL;
//配列の要素数を数える関数 count(配列名$)関数
echo count($student);