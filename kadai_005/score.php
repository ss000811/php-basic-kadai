<!DOCTYPE html>
<html lang="ja">

<head charset="UTF-8">
  <title>PHPの基礎編‗kadai_005</title>
</head>

<body></body>
  <p>
    <?php

    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    $total_Score = $score1+ $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    $average_Score = $total_Score / 10;

    echo $average_Score;
    ?>