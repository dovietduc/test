<?php
function getMutateArray($n, $a)
{
    $b = array();
    for ($i = 0; $i < $n; $i++) {
        $b[$i] = 0;
        if ((($i - 1) >= 0) && (($i - 1) < $n)) {
            $b[$i] += $a[$i - 1];
        }
        if ((($i) >= 0) && (($i) < $n)) {
            $b[$i] += $a[$i];
        }
        if ((($i + 1) >= 0) && (($i + 1) < $n)) {
            $b[$i] += $a[$i + 1];
        }
    }
    return $b;
}

$getMangMutate = getMutateArray(5, [4, 0, 1, -2, 3]);
echo "<pre>";
print_r($getMangMutate);
