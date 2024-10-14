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
</body>
</html>