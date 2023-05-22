<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

function brainProgression()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name', false, '? ');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');

    for ($i = 1; $i <= 3; $i++) {
        $randomLength = rand(6, 10);
        $randomStep = rand(1, 3);
        $randomFirstNumber = rand(1, 20);

        $randomRow = [];
        for ($r = $randomFirstNumber; $r < ($randomFirstNumber + $randomLength * $randomStep); $r += $randomStep) {
                $randomRow[] = $r;
        }

        $randomMissedNumber = rand(0, count($randomRow) - 1);

        $randomMissedRow = [];
        for ($j = 0; $j < $randomLength; $j++) {
            if ($j === $randomMissedNumber) {
                  $randomMissedRow[] = '..';
            } else {
                  $randomMissedRow[] = $randomRow[$j];
            }
        }

        $question = implode(" ", $randomMissedRow);
        $correctAnswer = $randomRow[$randomMissedNumber];
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!", $answer, $correctAnswer, $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
