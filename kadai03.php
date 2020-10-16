<?php
$name = "野田隼之介";
if ($name == "野田隼之介"){
   echo  "私は"."$name"."です";
} else {
  echo "あなたの名前ではありません";  
}
echo "\n";


$a = 0;
for($i = 1;$i <= 10000;$i++){
    $a +=$i;
}
echo $a;
echo "\n";


$fruits = array("桃","梨","林檎","葡萄","洋梨");
foreach($fruits as $like){
    echo $like;
    echo "\n";
}


$end = 100;
$start = 1;
for($i = $start; $i <= $end; $i++){
    if(($i % 5) == 0){
    echo $i;
    echo "\n";
    }
}