<?php
function sum($max){
  $result =  $max * 2;
  return $result;
}
 echo sum(100)."\n";


function f($a, $b){
 $result = $a + $b;
 return $result;
 }
 echo f(50,55)."\n";
 
 
 
 function ai($arr){
     $result = 1;
     foreach ($arr as $a){
    $result *= $a;
 }
    return $result;
 }
 echo ai(array(1,3,5,7,9))."\n";
 
 
 function max_array($arr){
 $max_number = $arr[0];
 foreach ($arr as $a){
 if ($max_number < $a){
 $max_number = $a;
 }
 }

 return $max_number;
 }
 echo max_array(array(1,2,3,4,5,6,7,8,9));