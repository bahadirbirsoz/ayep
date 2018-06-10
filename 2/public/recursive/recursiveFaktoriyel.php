<?php


function faktoriyel($n)
{
    if ($n == 1)
        return 1;
    return $n * faktoriyel($n - 1);
}

echo faktoriyel(5);
// 5* 4!
// 5 * 4 * 3!
// 5 * 4 * 3 * 2!
// 5 * 4 * 3 * 2 * 1

