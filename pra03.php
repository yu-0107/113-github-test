<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace ;
        }
    </style>
</head>
<body>
<hr>
<h2>直角三角形</h2>
 <?php
echo "*";
echo "<Br>";
echo "**";
echo "<Br>";
echo "***";
echo "<Br>";
echo "****";
echo "<Br>";
echo "*****";
echo "<Br>";
?>
<hr>
<h2>直角三角形</h2>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒直角三角形</h2>
<?php

for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>正三角形<h2>
<?php

for($i=0;$i<5;$i++){
    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒正三角形</h2>
<?php

for($i=0;$i<5;$i++){

    for($k=0;$k<$i;$k++){
        echo "&nbsp;";
        //空格的寫法
    }
    for($j=0;$j<(2*(4-$i)+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒正三角形</h2>
<?php
//自己的想法
for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
        //空格的寫法
    }
    for($j=0;$j<(2*$i+1);$j++){
        echo "*";

    }
    echo "<br>";
}
?>
<hr>
<h2>菱形</h2>
<?php
for($i=0;$i<9;$i++){
    if($i>4){
        for($k=0;$k<$i-4;$k++){
            echo "&nbsp;";
            //空格的寫法
    }
    for($j=0;$j<2*($i-(2*($i-4)))+1;$j++){
        echo "*";

    }
    echo "<br>";
    }else{    
        for($k=0;$k<4-$i;$k++){
            echo "&nbsp;";
            //空格的寫法
    }
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";

    }
    echo "<br>";
}}
?>    
<hr>
<h2>菱形</h2>
<?php
for($i=0;$i<9;$i++){
    if($i>4){
        $k1=$i-4;
        $j1=2*($i-(2*($i-4)))+1;
    }else{
        $k1=4-$i;
        $j1=(2*$i+1);
    }
    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>   
<hr>
<h2>矩形</h2>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==0 || $i==4)
            echo "*";
        else if($j==0 || $j==4){
            echo "*";
        }else{
            echo "&nbsp;";
        }
        }
    echo "<br>";
    }
?>
<hr>
<h2>矩形含對角線</h2>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo "*";
        }else if($j==0 || $j==4){
            echo "*";
        }else if($i==$j || $j==(4-$i)){
            echo "*";

        }else{
            echo "&nbsp;";
        
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>矩形含對角線</h2>
<?php
for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i==0 || $i==5){
            echo "*";
        }else if($j==0 || $j==5){
            echo "*";
        }else if($i==$j || $j==(5-$i)){
            echo "*";

        }else{
            echo "&nbsp;";
        
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>矩形練習</h2>
<?php
$width=7;
//套用變數更彈性
for($i=0;$i<$width;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==($width-1)){
            echo "*";
        }else if($j==0 ||$j==$width-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>矩形對角線</h2>
<?php
$width=7;
//套用變數更彈性
for($i=0;$i<$width;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==($width-1)){
            echo "*";
        }else if($j==0 ||$j==($width-1)){
            echo "*";
        }else if($i==$j ||$j==($width-1-$i)){
            echo "*";    
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>菱形練習</h2>
<?php
$size=11;

if($size >=3){
    if($size%2==0){
        $size++;
    }
    
}else{
    echo "數字太小,無法畫出菱形<br>";
}

for($i=0;$i<$size;$i++){
    if($i>floor($size/2)){
        for($k=0;$k<$i-floor($size/2);$k++){
            echo "&nbsp;";
            //空格的寫法
    }
        for($j=0;$j<2*($i-(2*($i-floor($size/2))))+1;$j++){
            echo "*";

    }
        echo "<br>";
}else{    
        for($k=0;$k<floor($size/2)-$i;$k++){
            echo "&nbsp;";
            //空格的寫法
    }
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";

    }
    echo "<br>";
}}
?>
<hr>
<h2>菱形對角線練習</h2>
<?php
for($i=0;$i<$size;$i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        if($j==0 || $j==$j1-1 || $i==(floor($size/2)) || $j==floor(($j1-1)/2)){
            echo "*";
        }else{
            echo "&nbsp;";
        }        
    }
    echo "<br>";
}
?>

</body>
</html>