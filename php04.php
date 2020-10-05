<?php
// 課題1
echo "<課題1>";
function twice($a){
    return $a*2;
}
echo twice(5);
echo "\n";

// 課題2
echo "<課題2>";
function sum($a,$b){
    return $a+$b;
}
echo sum(5,10);
echo "\n";

// 課題3
echo "<課題3>";
function kake($arr){
    $total=1;
    for($i=0;$i<=4;$i++){
        $total*=$arr[$i];
    }
    return $total;
}
$array=array(1,3,5,7,9);
echo kake($array);
echo "\n";


// 課題4
echo "<課題4>";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number<$a){
        $max_number=$a;
    }
 }
 return $max_number;
 }
$array=array(1,3,5,7,9);
echo max_array($array);
echo "\n";

// 課題5
// strip_tags()…タグを取り除く
$text="<p>p comment </p><a>a comment</a>";
echo strip_tags($text);
echo "\n";

// array_push()…1つ以上の要素を配列の最後に追加
$fruits = array("apple", "orange", "lemon");
array_push($fruits,"banana","pineapple");
print_r($fruits);
echo "\n";

// array_merge()…配列の要素の最後に1つ以上の配列を結合
$array1=[1,2,3];
$array2=[4,5,6];
$array3=[7,8,9];
$array=array_merge($array1,$array2,$array3);
print_r($array);

// time()…現在時刻のUNIXタイムスタンプを取得

// 現在のタイムスタンプ
echo "現在のUnixタイムスタンプ：".time();
echo "\n";
// 3日後のタイムスタンプ
$threedays=time()+(3*24*60*60);
echo "3日後のUnixタイムスタンプ：".$threedays;
echo "\n";

// mktime()…指定した日時のUNIXタイムスタンプを取得
$timestamp=mktime(0,0,0,10,6,2020);
echo $timestamp;
echo "\n";

// date()…指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
echo date("Y/m/d");
echo "\n";
echo date("Y-m-d H:i:s");
echo "\n";
echo date("Y年m月d日 H時i分s秒");
echo "\n";

?>