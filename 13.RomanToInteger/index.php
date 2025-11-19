<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $s): int
    {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $i = strlen($s) - 1;
        $prev = $result = $map[$s[$i]];

        while ($i > 0) {
            --$i;
            $curr = $map[$s[$i]];

            if ($curr < $prev) {
                $result -= $curr;
            }
            else {
                $result += $curr;
            }

            $prev = $curr;
        }

        return $result;
    }
}

$s = "MCMXCIV";

$solution = new Solution();
echo $solution->romanToInt($s);
