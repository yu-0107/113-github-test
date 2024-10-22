<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<h2>
<hr>陣列宣告</hr>
<?php
$header=['','國文','英文','數學','地理','歷史'];
$judy=['judy',95,64,70,90,84];
$amo=['amo',88,78,54,81,71];
$john=['john',45,60,68,70,62];
$peter=['peter',59,32,77,54,42];
$hebe=['hebe',71,62,80,62,64];
/*foreach($array as $idx => $value){
    echo "index=>". $idx .": value =>".$value;
    echo "<br>";
}
foreach($array2 as $key => $value){
    echo "index=>". $key .": value =>".$value;
    echo "<br>";
}

*/
?>

<style>
    table{
        border-collapse:collapse;
    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
<table>
<tr>
        <?php
    foreach($header as $value){
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
    <tr>
        <?php
    foreach($judy as $value){
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
    <tr>
        <?php
    foreach($amo as $value){
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
    <tr>
        <?php
    foreach($john as $value){
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
    <tr>
        <?php
    foreach($peter as $value){
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
    <tr>
        <?php
    foreach($hebe as $value){
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
</table>
<h2>利用程式來產生陣列</h2>
<!-- ul>li* -->
<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>

<?php
$nine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j =".($i*$j);
    }
}
/* echo "<pre>";
print_r($nine);
echo "</pre>";*/
$counter=0;
foreach($nine as $idx => $n){
    $counter++;
    if($counter==9){
        echo $n . "<br>";
        $counter=0;
    }else{
        echo $n . ",";
    }
}
echo "<hr>";
foreach($nine as $idx => $n){
    if($idx%9==8){
        echo $n . "<br>";
    }else{
        echo $n . ",";
    }
}
echo "<hr>";
echo "<table>";
foreach($nine as $idx => $n){
    if($idx%9==8){
        echo "<td>$n</td><tr>";
    }else if($idx%9==0){
        echo "<tr><td>$n</td>";
    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";

echo "<hr>";

echo "<table>";
foreach($nine as $idx => $n){
    $v=explode("=",$n)[1];
    if($idx%9==8){
        echo "<td>$v</td><tr>";
    }else if($idx%9==0){
        echo "<tr><td>$v</td>";
    }else{
        echo "<td>$v</td>";
    }
}
echo "</table>";
echo "<hr>";
$nine2=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine2["$i x $j"]=($i*$j);
    }
}
echo "<pre>";
print_r($nine2);
echo "</pre>";

echo "<hr>";
echo "<table>";
$counter=0;
foreach($nine2 as $n){
    $counter++;
    if($counter==9){
        echo "<td>$n</td></tr>";
        $counter=0;
    }else if($counter==1){
        echo "<tr><td>$n</td>";
    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";
echo "<hr>";

$nine3=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine3[]=['formula' => "$i x $j",'value'=>$i*$j];
    }
}
echo "<pre>";
print_r($nine3);
echo "</pre>";

echo "<hr>";

foreach($nine3 as $idx =>$item){
    if($idx%9==8){
        echo $item['formula'] . " = ".$item['value']. "<br>";
    }else{
        echo $item['formula'] . " = ".$item['value'];

    }
}

// GPT做的
/*echo "<br>";
echo "<table border='1'>"; // 開始表格並設定邊框
foreach ($nine as $idx => $n) {
    if ($idx % 9 == 0) {
        if ($idx != 0) {
            echo "</tr>"; // 關閉前一行
        }
        echo "<tr>"; // 開始新行
    }
    echo "<td>" . $n . "</td>"; // 在單元格中輸出數據
}
echo "</tr>"; // 關閉最後一行
echo "</table>"; // 關閉表格

// GPT做的
echo "<br>";
echo "<table border='1'>";

for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        $product = $i * $j;
        echo "<td>" . $product . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

/*for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo "$i x $j = ";
        echo $i*$j;
        echo ",";
    }
    echo "</br>";
}
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo "$i x $j = ";
        echo $i*$j;
        echo "</td>";
    }
}*/
?>
</body>
</html>