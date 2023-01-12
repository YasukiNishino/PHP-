<?php
$names = ["Andy","Betty","Carol"];
$temp = $names[0];  //指定された配列を一時的に保持
$names[0] = $names[2];
$names[2] = $temp;
var_dump($names);