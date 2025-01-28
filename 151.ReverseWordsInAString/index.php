<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = preg_split('/\s+/', trim($s));
        $words = array_reverse($words);
//        print_r($words);

        return implode(' ', $words);
    }
}

$s = '   a good   example';

$solution = new Solution();
echo $solution->reverseWords($s);
