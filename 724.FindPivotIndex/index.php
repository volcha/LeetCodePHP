<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $prefix = 0;
        $suffix = array_sum($nums);

        for ($i = 0; $i < count($nums); $i++) {
            $suffix -= $nums[$i];

            if ($suffix == $prefix) {
                return $i;
            }

            $prefix += $nums[$i];
        }

        return -1;
    }
}

$nums = [1,7,3,6,5,6];

$solution = new Solution();
echo $solution->pivotIndex($nums);