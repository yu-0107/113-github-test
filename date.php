<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
<?php
$date1 = new DateTime("2024-10-14");
$date2 = new DateTime("2024-10-24");

$interval = $date1->diff($date2);
echo $interval->days; // 輸出天數

?>
    <hr>
    <h2>給定兩個日期，計算中間間隔天數</h2>
<?php
date_default_timezone_set("Asia/Taipei");

echo date("Y/m/d H/i/s");
echo "<br>";

$start ='2024-10-01';
$end ='2024-10-30';
$startTime=strtotime($start);
echo '開始時間:' .$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '結束時間:' .$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "間隔:".$days;
echo "<br>";



?>
    <h2>計算距離自己下一次生日還有幾天</h2>
<?php

$date1 = new DateTime("2024-10-24");
$date2 = new DateTime("2025-01-07");

$interval = $date1->diff($date2);
echo $interval->days;

?>
    <hr>
    <h2>計算距離自己下一次生日還有幾天</h2>
<?php
$start =date("Y-m-d");
$end ='2025-01-07';
$startTime=strtotime($start);
echo '今日日期:' .$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '下次生日:' .$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "距離下次生日還有:".$days;
echo "<br>";

?>
</body>
</html>