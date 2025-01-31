<?php
class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $words = explode(' ', $s);

        if (strlen($pattern) != count($words)) {
            return false;
        }

        $letterToWord = [];
        $mapped  = [];

        for ($i = 0; $i < strlen($pattern); $i++) {
            if (!isset($letterToWord[$pattern[$i]])) {
                if (isset($mapped[$words[$i]])) {
                    return false;
                }
                else {
                    $mapped[$words[$i]] = true;
                }

                $letterToWord[$pattern[$i]] = $words[$i];
            }
            else if ($words[$i] != $letterToWord[$pattern[$i]]) {
                return false;
            }
        }

        return true;
    }
}

$pattern = 'aaaa';
$s = 'dog cat cat dog';

$solution = new Solution();
echo $solution->wordPattern($pattern, $s);