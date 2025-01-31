<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $prefix = [];
        $suffix = [];

        $prefix[0] = 1;
        $suffix[count($nums)-1] = 1;

        for ($i = 1; $i < count($nums); $i++) {
            $j = count($nums) - $i - 1;
            $prefix[$i] = $prefix[$i-1] * $nums[$i-1];
            $suffix[$j] = $suffix[$j+1] * $nums[$j+1];
        }

        for ($i = 0; $i < count($nums); $i++) {
            $nums[$i] = $prefix[$i] * $suffix[$i];
        }

        return $nums;
    }
}

$nums = [1,2,3,4];

$solution = new Solution();
print_r($solution->productExceptSelf($nums));