<?php

function find(array $sampleList, int $searchKey): ?int
{
    $countItems = count($sampleList);
    $lowerIndex = 0;
    $upperIndex = $countItems - 1;

    while (true) {
        $currentIndex = round(($lowerIndex + $upperIndex) / 2);

        if (!array_key_exists($currentIndex, $sampleList)) {
            return null;
        }

        if ($sampleList[$currentIndex] === $searchKey) {
            return $currentIndex;
        } elseif ($lowerIndex > $upperIndex) {
            return null;
        } else {
            if ($sampleList[$currentIndex] < $searchKey) {
                $lowerIndex = $currentIndex + 1;
            } else {
                $upperIndex = $currentIndex - 1;
            }
        }
    }
}

$sampleList = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(find($sampleList, 5));

var_dump(find($sampleList, 15));