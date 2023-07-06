<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function calculate(int $x, string $sign, int $y): int
{
    switch ($sign) {
        case '+':
            return $x + $y;
        case '-':
            return $x - $y;
        case '*':
            return $x * $y;
        default:
            throw new \Exception("Unknown operator: $sign");
    }
}

function brainCalc()
{
    $gameRules = 'What is the result of the expression?';

    $data = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 25);
        $mathSigns = ['+', '-', '*'];
        $randomSign = $mathSigns[array_rand($mathSigns)];
        $question = "$randomNumber1 $randomSign $randomNumber2";
        $correctAnswer = calculate($randomNumber1, $randomSign, $randomNumber2);
        $data[] = [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
