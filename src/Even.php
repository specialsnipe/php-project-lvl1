<?php

namespace Snipe\Even;

use function cli\line;
use function cli\prompt;

function begin()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $char = rand(1, 20);
        line("Question:{$char}");
        $answer = prompt('Your answer');
        if ($char % 2 === 0 && $answer === 'yes' || $char % 2 !== 0 && $answer === 'no') {
            line('Correct!');
        } else {
            if ($char % 2 === 0) {
                $correct = 'yes';
            }
            if ($char % 2 !== 0) {
                $correct = 'no';
            }
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correct);
            break;
        }
    }
}
