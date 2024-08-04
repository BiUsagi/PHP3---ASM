<?php

if (!function_exists('highlight_first_character')) {
    function highlight_first_character($text) {
        $firstCharacter = mb_substr($text, 0, 1);
        $remainingText = mb_substr($text, 1);
        return '<span class="firstcharacter">' . $firstCharacter . '</span>' . $remainingText;
    }
}