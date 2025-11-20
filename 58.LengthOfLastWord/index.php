<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord(string $s): int
    {
        $words = explode(' ', trim($s));

        return strlen($words[count($words) - 1]);
    }
}

$s = "   fly me   to   the moon  ";

$solution = new Solution();
echo $solution->lengthOfLastWord($s);
