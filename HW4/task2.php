<?php


$arr2 = [3, 7, 4, 3, 2, 1, 9, 12, 231];
function foo(array $arr): array
{
    return [
        'max' => max($arr),
        'min' => min($arr),
        'avg' => array_sum($arr) / count($arr)];
}

print_r(foo($arr2));