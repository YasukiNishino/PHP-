<?php
$names = ["Andy","Betty","Carol"];

for($i = 0; $i < count($names); $i++){
    //この場合はAndyではない時に条件分岐に入る!=
    if($names[$i] != "Andy"){
        echo "Hello ";
        echo $names[$i] . PHP_EOL;
    }
}