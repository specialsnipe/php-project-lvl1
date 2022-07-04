<?php

namespace Snipe\Nod;

use function Snipe\Engine\run;

use const Snipe\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function findDivisor($firstNumber, $secondNumber)
{
    $min = min($firstNumber, $secondNumber);
    for ($i = 1; $i <= $min; $i++) {
        if ($firstNumber % $i === 0 && $secondNumber % $i === 0) {
            $result = $i;
        }
    }
    return $result;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = mt_rand(1, 100);
        $secondNumber = mt_rand(1, 100);
        $rightAnswer = (string)findDivisor($firstNumber, $secondNumber);
        $expression = "{$firstNumber} {$secondNumber}";
        $gameData[] = [$expression, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
