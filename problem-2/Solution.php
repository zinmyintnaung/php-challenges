<?php

class Solution {

    /**
    * @param Integer[] $arr1
    * @param Integer[] $arr1
    * @return Integer[]
    */
    public static function addReverse($arr1, $arr2) {
        $intArr1 = (int)implode("", array_reverse($arr1));
        $intArr2 = (int)implode("", array_reverse($arr2));
        return array_reverse(str_split($intArr1 + $intArr2));
    }
}
$first = [1, 0 , 1];
$second = [7, 1, 1];

print_r(Solution::addReverse($first, $second));