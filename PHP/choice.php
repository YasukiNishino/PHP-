<?php
$diceA = 6;
$diceB = "6";
//(int)変数名 ←これでデータ型の変換ができる
$diceC = (int) $diceB;
//比較演算子で"=="は使わない,"==="を使う。
if($diceA === $diceC){
    echo "Win";
} else {
    echo "Lose";
}
//(string)変数名 ←これでデータ型の変換ができる
$diceD = (string) $diceA;

if($diceB === $diceD){
    echo "Win";
} else {
    echo "Lose";
}