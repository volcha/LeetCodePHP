<?php
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $magazineLetters = [];

        foreach (str_split($magazine) as $char) {
            $magazineLetters[$char]++;
        }

        foreach (str_split($ransomNote) as $char) {

            if (!isset($magazineLetters[$char])) {
                return false;
            }

            $magazineLetters[$char]--;

            if ($magazineLetters[$char] < 0) {
                return false;
            }
        }

        return true;
    }
}

$ransomNote = 'aa';
$magazine = 'aab';

$solution = new Solution();
echo $solution->canConstruct($ransomNote, $magazine);