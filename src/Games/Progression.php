<?php

namespace Snipe\Progression;

use function Snipe\Engine\run;

use const Snipe\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $result = '';
        $number = mt_rand(1, 15);
        $length = mt_rand(5, 10);
        $iteration = mt_rand(1, 5);
        $hiddenNumber = mt_rand(1, $length);
        for ($j = 0; $j <= $length; $j++) {
            if ($j === $hiddenNumber) {
                $result = "{$result}.. ";
                $rightNumber = $number;
                $number += $iteration;
            } else {
                $result = "{$result}{$number} ";
                $number += $iteration;
            }
        }
        $expression = $result;
        $rightAnswer = (string)$rightNumber;
        $gameData[] = [$expression, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
