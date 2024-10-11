<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
</head>
<body>
<h1>for loop</h1>
<?php

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
    echo "<br>";
}
    echo "<br>";
for($i=10 ; $i>0 ; $i--){
    echo $i*10;
    echo "<br>";
}

?>
<h1>while</h1>
<?php
$score=30;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;

?>

<h1>陣列</h1>
<div>['a','b','good','sad','john',123,999]</div>
<?php
$a=['a','b','good','sad','john',123.999,'a','b','good','sad','john',123.999,'a','b','good','sad','john',123.999,'a','b','good','sad','john',123.999];

/* echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo "<br>"; */

for($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";
}


$b=['姓名'=>'楊宗淯','數學'=>90,'國文'=>80,'英文'=>20];
/*$keys = array_keys($a);

for($i=0;$i<count($keys);$i++){
    $key = $keys[$i];
    $value = $a[$key];
    echo $key . ';' . $value . '<br>';
}*/

foreach ($b as $value) {
    echo $value . '<br>';
}

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>