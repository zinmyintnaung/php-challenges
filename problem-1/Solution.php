<?php

class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    public static function twoSum($nums, $target) {
        $result = [];
        for($i=0; $i < sizeof($nums); $i++){
            for($j=1; $j < sizeof($nums); $j++){
                if($i !== $j){
                    if($nums[$i] + $nums[$j] === $target){
                        $result[] = $i;
                        $result[] = $j;
                        break;
                    }
                }
            }
            if(sizeof($result) > 0){
                break;
            }
        }
        return $result;
    }
}
$arr = [1, 2, 3, 4, 0];
$target = 6;
echo 'Array is: '.implode(", ", $arr);
echo '<br/>';
echo 'Target is: '.$target;
echo '<br/>';
print_r(Solution::twoSum($arr, $target));