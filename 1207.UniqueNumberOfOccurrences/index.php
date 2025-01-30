<?php
class Solution {

    // Меньше памяти
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $occurrences = array_count_values($arr);

        $uniqueness = [];

        foreach ($occurrences as $value) {
            if (isset($uniqueness[$value])) {
                return false;
            }

            $uniqueness[$value] = true;
        }

        return true;
    }

    // Больше памяти
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences2($arr) {
        $occurrences = array_count_values($arr);

        return count($occurrences) == count(array_flip($occurrences));
    }
}

$arr = [-3, 0, 1, -3, 1, 1, 1, -3, 10, 0, 7];

$solution = new Solution();
echo $solution->uniqueOccurrences($arr);