<?php
$names = ["Andy","Betty","Carol"];
array_splice($names, 1, 1); //配列の要素数を削除する
                            //関数array_splice
                            //（第1引数に対象の配列、
                            //第2引数に開始の要素番号、
                            //第3引数に削除する要素数）
var_dump($names);