//Task Score 100
function solution($A) {
    $sizeOfString = strlen($A);
    $i = 0;
    $j = 0;
    $B = array();
    while($i < $sizeOfString) {
        if(!isset($B[$j])) {
            $B[$j] = $A[$i];
        } else {
            if(compliment($A[$i]) == $B[$j]) {
                array_pop($B);
                if($j > 0) {
                    $j--;
                }
            } else {
                array_push($B,$A[$i]);
                $j++;
            }
        }
        $i++;
    }

    if(count($B) > 0) {
        return 0;
    } else {
        return 1;
    }
}

function compliment($a) {
    $result = null;
    switch($a) {
        case ')': $result = '('; break;
        case '}': $result = '{'; break;
        case ']': $result = '['; break;
    }
    return $result; 
}

/*
Task description
A string S consisting of N characters is considered to be properly nested if any of the following conditions is true:

S is empty;
S has the form "(U)" or "[U]" or "{U}" where U is a properly nested string;
S has the form "VW" where V and W are properly nested strings.
For example, the string "{[()()]}" is properly nested but "([)()]" is not.

Write a function:

function solution($S);

that, given a string S consisting of N characters, returns 1 if S is properly nested and 0 otherwise.

For example, given S = "{[()()]}", the function should return 1 and given S = "([)()]", the function should return 0, as explained above.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [0..200,000];
string S consists only of the following characters: "(", "{", "[", "]", "}" and/or ")".
*/