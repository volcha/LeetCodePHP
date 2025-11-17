<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k = 1;
        $length = count($nums);

        for ($i = 1; $i < $length; ++$i) {
            if ($nums[$i] !== $nums[$i - 1]) {
                $nums[$k] = $nums[$i];
                ++$k;
            }
        }

        return $k;
    }
}

$nums = [0,0,1,1,1,2,2,3,3,4];

$solution = new Solution();
echo $solution->removeDuplicates($nums);
echo "\n";
print_r($nums);
