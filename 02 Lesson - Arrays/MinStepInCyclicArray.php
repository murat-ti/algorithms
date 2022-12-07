<?php

$tools = ['hammer', 'mallet','file', 'saw', 'ladder', 'scissor'];
$startIndex = 1;//scissor
$find = 'scissor';
//Minimum Steps = min(2 Steps to Left, 1 Step to Right [Circular]) = 4 Steps

//I started from this solution. It has several iterations
echo'Min steps: '.findMin($tools, $startIndex, $find);

//Later I optimized solution and now it finds value only in one iteration
//if returned value is equal 0, so value not found
echo'Min steps: '.findMinOptimized($tools, $startIndex, $find);

//find in one iteration
function findMinOptimized($tools, $startIndex, $find) {
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

//find in several iterations
function findMin($tools, $startIndex, $find) {
	$count = count($tools);
    $circle = [];
    $i = 0;
    $j = $startIndex;
    while($i < $count) {
    	
        $circle[] = $tools[$j];
        $i++;
        $j++;
        
        if($j == $count) {
        	$j = 0;
        }
    }
    
    $rightSideSteps = countSteps($circle, $find);
    $leftSideSteps = countSteps(array_reverse($circle), $find) + 1;
    
    return min($rightSideSteps, $leftSideSteps);
}

function countSteps($circle, $find) {
	$steps = 0;
    for($i=0; $i<count($circle); $i++) {
    	echo $circle[$i].' == '.$find.'<br>';
    	if($circle[$i] == $find) {
        	break;
        }
        $steps++;
    }
    return $steps;
}
?>