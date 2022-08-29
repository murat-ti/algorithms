// Task Score 100
function solution($A) {
    sort($A);
    for($i=0; $i<count($A); $i++) {
        if($A[$i] != $i+1) {
            return 0;
        }
    }
    return 1;
}

// Task Score 66
function solution($A) {
    sort($A);
    $result = 1;
    for($i=0; $i<count($A)-1; $i++) {
        if($A[$i+1] - $A[$i] != 1) {
            $result = 0;
            break;
        }
    }
    return $result;
}

/*
Task description
A non-empty array A consisting of N integers is given.

A permutation is a sequence containing each element from 1 to N once, and only once.

For example, array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2
is a permutation, but array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
is not a permutation, because value 2 is missing.

The goal is to check whether array A is a permutation.

Write a function:

function solution($A);

that, given an array A, returns 1 if array A is a permutation and 0 if it is not.

For example, given array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2
the function should return 1.

Given array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
the function should return 0.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [1..1,000,000,000].
*/