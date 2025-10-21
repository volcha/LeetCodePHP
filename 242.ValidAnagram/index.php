<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $occurrence = [];

        foreach (str_split($s) as $char) {
            $occurrence[$char] = ($occurrence[$char] ?? 0) + 1;
        }

        foreach (str_split($t) as $char) {
            if (!isset($occurrence[$char])) {
                return false;
            }

            $occurrence[$char]--;

            if ($occurrence[$char] < 0) {
                return false;
            }
        }

        foreach ($occurrence as $value) {
            if ($value > 0) {
                return false;
            }
        }

        return true;
    }

    function isAnagram2($s, $t): bool
    {
        $occurrence = [];

        if (strlen($s) != strlen($t)) {
            return false;
        }

        foreach (str_split($s) as $char) {
            $occurrence[$char] = ($occurrence[$char] ?? 0) + 1;
        }

        foreach (str_split($t) as $char) {
            if (!isset($occurrence[$char])) {
                return false;
            }

            $occurrence[$char]--;

            if ($occurrence[$char] < 0) {
                return false;
            }
        }

        return true;
    }

    function isAnagram3($s, $t): bool
    {
        print_r(array_count_values($s));

        return count_chars($s) === count_chars($t);
    }
}

$s = 'anagram';
$t = 'aagaram';

$solution = new Solution();
echo $solution->isAnagram3($s, $t);
