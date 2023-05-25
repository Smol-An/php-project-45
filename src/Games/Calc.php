<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\play;

function calculate(int $x, $sign, int $y)
{
    switch ($sign) {
        case '+':
            return $x + $y;
        case '-':
            return $x - $y;
        case '*':
            return $x * $y;
        default:
            return null;
    }
}

function brainCalc()
{
    $gameRules = 'What is the result of the expression?';

    $randomNumber1 = rand(1, 25);
    $randomNumber2 = rand(1, 25);
    $randomNumber3 = rand(1, 25);
    $randomNumber4 = rand(1, 25);
    $randomNumber5 = rand(1, 25);
    $randomNumber6 = rand(1, 25);

    $mathSigns = ['+', '-', '*'];
    $randomSign1 = $mathSigns[array_rand($mathSigns)];
    $randomSign2 = $mathSigns[array_rand($mathSigns)];
    $randomSign3 = $mathSigns[array_rand($mathSigns)];

    $question1 = "{$randomNumber1} {$randomSign1} {$randomNumber2}";
    $question2 = "{$randomNumber3} {$randomSign2} {$randomNumber4}";
    $question3 = "{$randomNumber5} {$randomSign3} {$randomNumber6}";

    $correctAnswer1 = calculate($randomNumber1, $randomSign1, $randomNumber2);
    $correctAnswer2 = calculate($randomNumber3, $randomSign2, $randomNumber4);
    $correctAnswer3 = calculate($randomNumber5, $randomSign3, $randomNumber6);

    play($gameRules, $question1, $question2, $question3, $correctAnswer1, $correctAnswer2, $correctAnswer3);
}
