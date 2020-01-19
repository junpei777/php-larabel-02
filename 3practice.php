<?php

function sum($max) {
  $result = 0;
  for($i =1; $i<= $max; $i++){
    $result += $i;
  }
  return $result;
}

echo sum(1000);
?>

<?php
$string = "ABCDEF";
echo strlen($string);
//=> 6 と表示される
?>

<?php

$string = "I love Ruby!";

// Ruby という文字列を　PHP に置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;
//=> I love PHP!
?>



<?php
function twice($junpei){
  return $junpei*2;
}

echo twice(2);
?>

<?php
function f($a,$b){
  return $a+$b;
}

echo f(2,8);
?>

<?php
function k($arr){
  $result =1;
  foreach($arr as $o){
    $result =$result * $o;
  }
  return $result;
}

echo k([1,3,5,7,9]);
?>

<?php
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
   if($max_number < $a){
     $max_number = $a;
   }
 }
 return $max_number;
 }
 
 echo max_array([2,1,5,10,7,3,20,19]);
 ?>
 
<?php
$str="<h1>元気が出る</h1>"
 ."<p>かもしれない</p>";
 echo strip_tags($str);
 
?>

<?php
$stack = array("dog", "cat");
array_push($stack, "bird");
print_r($stack);
?>

<?php
$colors1 = ['red','blue','yellow'];
$colors2 = ['gold','black'];

 $colors_merge = array_merge($colors1,$colors2);
 print_r($colors_merge);
 
?>
 <?php
echo '現在のUnixタイムスタンプ：'.time();
echo '<br>';
?>

<?php
$timestamp = mktime(14, 25, 32, 19, 1, 2020);
echo $timestamp;
?>

<?php
echo date('Y/m/d');
echo'<br>';

