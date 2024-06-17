<?php

namespace Braingames\Games\calculator;

use function Braingames\Games\Engine\startGame;

function startCalculator()
{
    $welcomeMessage = "What is the result of the expression?";
    
    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operetion = rand(1,3);
        switch ($operetion){
            case 1:
                $question = "{$number1} * {$number2}";
                $answer = $number1 * $number2;
                break;
            case 2:
                $question = "{$number1} + {$number2}";
                $answer = $number1 + $number2;
                break;
            case 3:
                $question = "{$number1} - {$number2}";
                $answer = $number1 - $number2;
                break;
        }
        $questionAnswerPairs[] = [$question,(string) $answer];
    }
    startGame($welcomeMessage, $questionAnswerPairs);
}