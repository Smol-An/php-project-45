<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;


function calculate(int $x, mixed $sign, int $y): int
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

    $data = function () {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 25);
        $mathSigns = ['+', '-', '*'];
        $randomSign = $mathSigns[array_rand($mathSigns)];
        $question = "{$randomNumber1} {$randomSign} {$randomNumber2}";
        $correctAnswer = calculate($randomNumber1, $randomSign, $randomNumber2);
        return [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
