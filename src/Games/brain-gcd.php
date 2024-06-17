<?php

namespace Braingames\Games\Gcd;

use function Braingames\Games\Engine\startGame;

function startgsd()
{
    $welcomeMessage = "Find the greatest common divisor of given numbers.";
    
    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "{$number1} {$number2}";
        $answer = gmp_gcd($number1, $number2);
        $questionAnswerPairs[] = [$question,(string) $answer];
    }
    startGame($welcomeMessage, $questionAnswerPairs);
}
