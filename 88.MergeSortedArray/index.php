<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $m--;
        $n--;

        for ($i = count($nums1) - 1; $i >= 0; $i--) {
            if ($n == -1) {
                break;
            }
            elseif (($m == -1) || ($nums1[$m] < $nums2[$n])) {
                $nums1[$i] = $nums2[$n];
                $n--;
            }
            else {
                $nums1[$i] = $nums1[$m];
                $m--;
            }
        }

        print_r($nums1);
    }
}

$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

$solution = new Solution();
$solution->merge($nums1, $m, $nums2, $n);