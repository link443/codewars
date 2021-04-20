<?php

//Write Number in Expanded Form
//You will be given a number and you will need to return it as a string in Expanded Form. For example:
//
//expanded_form(12); // Should return "10 + 2"
//expanded_form(42); // Should return "40 + 2"
//expanded_form(70304); // Should return "70000 + 300 + 4"
//NOTE: All numbers will be whole numbers greater than 0.

function expanded_form($n)
{
    $toString = (string)$n;
    $str = '';
    $resultStr = '';
    $arrNumber = (str_split($toString));
    $resultArr = [];
    for ($i = 0; $i < count($arrNumber); $i++) {
        if (isset($arrNumber[$i + 1]) and $arrNumber[$i] == 0) {
            $str = $arrNumber[$i];
            for ($k = (count($arrNumber) - $i - 1); $k > 0; $k--) {
                $str .= '0';
            }
            $resultArr[] = $str;
            continue;
        }
        elseif ($arrNumber[$i] != 0 and isset($arrNumber[$i+1])) {
            $str = $arrNumber[$i];
            for ($k = (count($arrNumber) - $i - 1); $k > 0; $k--) {
                $str .= '0';
            }
            $resultArr[] = $str;
            continue;
        }
        $resultArr[] = $arrNumber[$i];
    }
    for ($i = 0; $i < count($resultArr); $i++) {
        if ($resultArr[$i] == 0) {
            continue;
        }
        $resultStr .= $resultArr[$i] . ' + ';
    }
    return substr($resultStr,0,-2);
}