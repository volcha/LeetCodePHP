<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $length = count($prices);
        $buy = $result = 0;

        for ($i = 1; $i < $length; ++$i) {
            if ($prices[$i] < $prices[$buy]) {
                $buy = $i;
                continue;
            }

            $profit = $prices[$i] - $prices[$buy];

            if ($profit > $result) {
                $result = $profit;
            }
        }

        return $result;
    }
}

$prices = [7,1,5,3,6,4];

$solution = new Solution();
echo $solution->maxProfit($prices);
