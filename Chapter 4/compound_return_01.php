<?php
function wordsToUpper($string) {
    if (empty($string) || is_null($string)) {
        return '';
    }
    $string = explode(' ', $string);
    return array_map('strtoupper', $string);
}

$input = 'one two three';

$converted = wordsToUpper($input);
echo '<pre>';
print_r($converted);
echo '</pre>';