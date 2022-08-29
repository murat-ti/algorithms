//Task Score 60

function solution($A) {
    sort($A);
    $result = 1;
    if(count($A) == 1)
	{
		$result = $A[0] + 1;
	}
    else if(count($A) > 1) {
        $result = $A[0];
        for($i=0; $i<count($A)-1; $i++){
            if($A[$i+1] != $A[$i] + 1) {
                $result = $A[$i]+1;
                break;
            }
        }
    }
    return $result;
}

/*
Task description
An array A consisting of N different integers is given. The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

function solution($A);

that, given an array A, returns the value of the missing element.

For example, given array A such that:

  A[0] = 2
  A[1] = 3
  A[2] = 1
  A[3] = 5
the function should return 4, as it is the missing element.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [0..100,000];
the elements of A are all distinct;
each element of array A is an integer within the range [1..(N + 1)].
*/