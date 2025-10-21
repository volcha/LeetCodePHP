<?php
class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $result = 0;

        $result = max($result, $gain[0]);

        for ($i = 1; $i < count($gain); $i++) {
            $gain[$i] += $gain[$i-1];

            $result = max($result, $gain[$i]);
        }

        return $result;
    }
}

$gain = [-5,1,5,0,7];

$solution = new Solution();
echo $solution->largestAltitude($gain);