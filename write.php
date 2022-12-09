<?php

// data.txtへの書き込み
//関数化
$date = $POST['date'];
$horse = $POST['horse'];
$instructor = $_POST['instructor'];
$activity = $_POST['activity'];
$comment = $_POST['comment'];
$rating = $_POST['rating'];
$time = date('Y-m-d H:i:s');

// 開く
$file = fopen('data/data.txt','a');
// 書く
// fwrite($file, $time."\n");
$content_arr =[

] ;

fwrite($file, $time . $date . $instructor . $activity . $comment . $rating . "\n");

// 閉じる
fclose($file);

//文字作成
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
