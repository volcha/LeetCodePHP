<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $k = 0;

        foreach ($nums as $num) {
            if ($num !== $val) {
                $nums[$k] = $num;
                ++$k;
            }
        }

        return $k;
    }
}

$nums = [0,1,2,2,3,0,4,2];
$val = 2;

$solution = new Solution();
echo $solution->removeElement($nums, $val);
echo "\n";
print_r($nums);
