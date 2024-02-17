<?php
function nPrimeNumbers(int $length): array
{
    $primeList = [];
    for ($i = 1; $i <= $length; $i++) {
        $count = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $count++;
            }
        }
        if ($count < 3) $primeList[] = $i;
    }
    return $primeList;
}

var_dump(nPrimeNumbers(15));
