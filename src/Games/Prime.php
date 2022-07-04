<?php

namespace Snipe\Prime;

use function Snipe\Engine\run;

use const Snipe\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = mt_rand(2, 60);
        $prime = true;
        for ($j = 2; $j <= $number / 2; $j++) {
            if ($number % $j === 0) {
                $prime = false;
                break;
            }
        }
        $expression = $number;
        $rightAnswer = $prime ? 'yes' : 'no';
        $gameData[] = [$expression, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
