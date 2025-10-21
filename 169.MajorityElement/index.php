<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $occurrence = array_count_values($nums);
        $maxValue = max($occurrence);
        return array_search($maxValue, $occurrence);
    }
}

$nums = [2, 2, 1, 1, 1, 2, 2];

$solution = new Solution();
echo $solution->majorityElement($nums);