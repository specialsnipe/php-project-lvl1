<?php

namespace Snipe\Calc;

use function Snipe\Engine\run;

use const Snipe\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function calculate(string $operator, int $firstNumber, int $secondNumber)
{
    switch ($operator) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
        default:
            throw new \Exception("Unknown operation symbol {$operator}");
    }
}

function runGame()
{
    $operatorArr = ['+', '-', '*'];
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $operator = $operatorArr[array_rand($operatorArr, 1)];
        $firstNumber = mt_rand(1, 15);
        $secondNumber = mt_rand(1, 15);
        $expression = "{$firstNumber} {$operator} {$secondNumber}";
        $rightAnswer = (string)calculate($operator, $firstNumber, $secondNumber);
        $gameData[] = [$expression, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
