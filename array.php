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
</body>
</html>