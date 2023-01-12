<?php
$student = ["name" => "Andy" , "age" => 20];
//連想配列の要素を削除する時は、unset関数を使う unset($連想配列名[""])
unset($student["age"]);
//var_dump関数($連想配列名)で中身を確認できる
var_dump($student);