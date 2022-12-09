<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saddle</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

</head>
<body>

    
    <header class="header">
    
        <h1>騎乗記録</h1>
    </header> 

    <main>

<div class="count_all">
    <?php 
    $fp = fopen('./data/data.txt', 'r' );
    for( $count = 0; fgets( $fp ); $count++ );
    echo "これまで乗った回数は" . $count . "回です！"; 
    ?>

</div>

    <form action="write.php" method="post">
        <div class="bold">日付</div>
         <input type="text" name="date" id="date">
        <div class="bold">インストラクター名</div>
            <label><input type="radio" name="instructor" value="a">山崎先生</label>
            <label><input type="radio" name="instructor" value="b">森田先生</label>
            <label><input type="radio" name="instructor" value="c">福島先生</label>
            <label><input type="radio" name="instructor" value="d">かえる先生</label>

        <p class="bold">馬名</p>
            <input type="text" name="horse">

        <p class="bold">運動内容</p>
        <div> 
            <label><input type="radio" name="activity" value="fw">フラットワーク</label>
            <label><input type="radio" name="activity" value="ju">障害飛越</label>
            <label><input type="radio" name="activity" value="dr">馬場馬術</label>
            <label><input type="radio" name="activity" value="cc">クロスカントリー</label>
        </div>  
        <div class="bold">今日の自分に点数をつけるなら</div>
            <label><input type="radio" name="rating" value="1">1</label>
            <label><input type="radio" name="rating" value="2">2</label>
            <label><input type="radio" name="rating" value="3">3</label>
            <label><input type="radio" name="rating" value="4">4</label>
            <label><input type="radio" name="rating" value="5">5</label>
        
        <div class="bold">コメント</div>
        <textarea id="comment" name="comment"
          rows="5" cols="33"></textarea>

        <div><input type="submit" value="送信"></div>

    </form>




    <div class="canvas-container">
    <canvas id="myLineChart"></canvas>
    </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php include('./chart.php'); ?>


</body>





</html>