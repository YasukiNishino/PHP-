<?php
//連想配列複数宣言
$students = [
    ["name" => "Andy", "age" => 20],
    ["name" => "Betty", "age" => 19],
    ["name" => "Carol", "age" => 21]
];
	//連想配列分だけループ
	for ($i = 0; $i < count($students); $i++){
		//配列の要素数内の条件分岐
		if($students[$i]["age"] >= 20){
		echo "Hello ";
		echo $students[$i]["name"] . $students[$i]["age"] . PHP_EOL;
		}
	}