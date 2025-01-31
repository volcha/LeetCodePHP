<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $change = [];
        $mapped = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (!isset($change[$s[$i]])) {
                if (isset($mapped[$t[$i]])) {
                    return false;
                }
                else {
                    $mapped[$t[$i]] = true;
                }

                $change[$s[$i]] = $t[$i];
            }
            else if ($change[$s[$i]] != $t[$i]) {
                return false;
            }
        }

        return true;
    }
}

$s = 'paper';
$t = 'title';

$solution = new Solution();
echo $solution->isIsomorphic($s, $t);