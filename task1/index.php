<?php

//solution('abc') // should return ['ab', 'c_']
//solution('abcdef') // should return ['ab', 'cd', 'ef']


function solution($str)
{
    $resultArr = [];
    if (empty($str)) {
        return $resultArr;
    }
    $arrSymbols = str_split($str);

    for ($i = 0; $i < count($arrSymbols); $i += 2) {
        if (!($arrSymbols[$i + 1])) {
            $resultArr[] = $arrSymbols[$i] . '_';
            break;
        }
        $resultArr[] = $arrSymbols[$i] . $arrSymbols[$i + 1];
    }
    return $resultArr;
}


