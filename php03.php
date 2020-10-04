<?php

// 課題1
echo "<課題1>";
echo "\n";
$name="Ryoya Tanifuji";
if($name=="Ryoya Tanifuji"){
    echo "私は Ryoya Tanifuji です";
}
else{
    echo "Ryoya Tanifujiではありません";
}
echo "\n";

// 課題2
echo "<課題2>";
echo "\n";
$total=0;
for($i=1;$i<=10000;$i++){
    $total+=$i;
}
echo $total;
echo "\n";

// 課題3
echo "<課題3>";
echo "\n";
$fruits=array("apple","orange","lemon","banana","grape");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

// 課題4
echo "<課題4>";
echo "\n";
// for文の始めの値を定義する
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}