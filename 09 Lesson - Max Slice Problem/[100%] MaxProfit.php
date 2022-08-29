//Task Score 100
function solution($A) {
    if(count($A) < 2) {
        return 0;
    }

    $maxProfit = 0;
    $minProfit = $A[0]; 
    for($i=0; $i<count($A); $i++) {
        $minProfit = min($minProfit, $A[$i]);
        $maxProfit = max($maxProfit, $A[$i] - $minProfit);
    }

    return $maxProfit;
}

//Task Score 66
function solution($A) {
    $profit = 0;

    for($i=0; $i<count($A)-1; $i++) {
        for($j=$i+1; $j<count($A); $j++) {
            if($A[$j]-$A[$i] > $profit) {
                $profit = $A[$j]-$A[$i];
            }
        }
    }

    return $profit;
}