<?php

$tools = ['hammer', 'mallet','file', 'saw', 'ladder', 'scissor'];
$startIndex = 1;//scissor
$find = 'scissor1';
//Minimum Steps = min(2 Steps to Left, 1 Step to Right [Circular]) = 4 Steps

//if returned value is equal 0, so value not found
echo'Min steps: '.findMin($tools, $startIndex, $find);

function findMin($tools, $startIndex, $find) {
$count = count($tools);
  $rightSideSteps = $leftSideSteps = $i = 0;
  $right = $left = $startIndex;
   
  while($i < $count) {     
    //echo $tools[$right].' => '.$tools[$left].'<br>';
     
    if($tools[$right] == $find || $tools[$left] == $find) {
     return $i;
    }
     
    $i++;
    $right++;
    $left--;
     
    if($right == $count) {
     $right = 0;
    }
     
    if($left == -1) {
     $left = $count - 1;
    }  
  }
  return 0;
}
?>