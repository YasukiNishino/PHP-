<?php
for ($i = 0; $i < 10; $i++){
    //$iが5の時ループを抜け出す処理 break文
    if($i == 5){
        break;
    }
    echo $i . PHP_EOL;
}
echo "end" . PHP_EOL;

for($i = 0; $i < 10; $i++){
    //$iが5の時スキップする処理 continue文
    if($i == 5){
        continue;
    }
    echo $i . PHP_EOL;
}
echo "end" . PHP_EOL;