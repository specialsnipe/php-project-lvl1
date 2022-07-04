<?php

namespace Snipe\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run($description, $gameData)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    foreach ($gameData as [$question, $rightAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $rightAnswer) {
            line('Correct!');
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations,%s!", $name);
}
