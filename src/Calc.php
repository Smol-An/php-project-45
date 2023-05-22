<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function brainCalc()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name', false, '? ');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');

    for ($i = 1; $i <= 3; $i++) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 25);
        $mathSigns = ['+', '-', '*'];
        $randomSign = $mathSigns[array_rand($mathSigns)];
        $randomMathExpression = "{$randomNumber1} {$randomSign} {$randomNumber2}";
        switch ($randomSign) {
            case '+':
                $correctAnswer = $randomNumber1 + $randomNumber2;
                break;
            case '-':
                $correctAnswer = $randomNumber1 - $randomNumber2;
                break;
            case '*':
                $correctAnswer = $randomNumber1 * $randomNumber2;
        }
        line("Question: %s", $randomMathExpression);
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

brainCalc();
