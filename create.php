<?php
//var_dump($_POST);
//exit();

//データの受取
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$genre = $_POST['genre'];
$food = $_POST['food'];
$travel = $_POST['travel'];

//書き込みデータの作成（スペース区切りで最後に改行コードを追加）
//$write_data = "{$name} {$email} {$age} {$genre} {$food} {$travel}\n";
//ファイルを開く処理
$file = fopen('data/question.csv', 'a');
//配列
$array = [$name, $email, $age, $genre, $food, $travel];
//CSVにカンマとダブルクオートデクギル処理
fputcsv($file, $array, ',', '"');
//ファイルロックの処理
flock($file, LOCK_EX);
//ファイルを書き込む処理
//fwrite($file, $write_data);
//ファイルアンロックの処理
flock($file, LOCK_UN);
//ファイルを閉じる処理
fclose($file);
//結果画面に移動
header('Location:read.php');
