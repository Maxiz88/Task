<?php
$s = '[5] * 3 - ( 4 - 7 * [3-6])';
function checkBrackets($s) {
    echo preg_match('/^[[]\d[]]\s[*]\s\d\s[-]\s[(]\s\d\s[-]\s\d\s[*]\s[[]\d[-]\d[]][)]$/', $s, $matches);
}
checkBrackets($s);