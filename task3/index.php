<?php

//Build Tower by the following given argument:
//number of floors (integer and always greater than 0).
//
//Tower block is represented as *
//

//
//for example, a tower of 3 floors looks like below
//
//[
//  '  *  ',
//  ' *** ',
//  '*****'
//]
//and a tower of 6 floors looks like below
//
//[
//  '     *     ',
//  '    ***    ',
//  '   *****   ',
//  '  *******  ',
//  ' ********* ',
//  '***********'
//]

function tower_builder($n)
{
    $arr = [];
    $str = '';
    $int = $n;
    for ($i = 0; $i < $int; $i++) {
        for ($k = $int - $i; $k > 1; $k--) {
            $str .= ' ';
        }
        for ($j = 0; $j <= $i * 2; $j++) {
            $str .= '*';
        }
        for ($m = $int - $i; $m > 1; $m--) {
            $str .= ' ';
        }
        $arr[] = $str;
        $str = null;
    }
    return $arr;
}