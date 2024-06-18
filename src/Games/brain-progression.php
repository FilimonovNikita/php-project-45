<?php

namespace Braingames\Games\progression;

use function cli\line;
use function Braingames\Games\Engine\startGame;

function starprogression()
{
    $welcomeMessage = "What number is missing in the progression?";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $arrayNumber = rand(5, 10);
        $step = rand(1, 10);
        $arrayFirstNumber = rand(0, 100);
        $arrayAllNumbers = [];
        for ($x = 0, $curentNumber = $arrayFirstNumber; $x < $arrayNumber; $x += 1) {
            $arrayAllNumbers[] = $curentNumber;
            $curentNumber += $step;
        }

        $arrayPosQuestion = rand(0, $arrayNumber - 1);
        $answer = $arrayAllNumbers[$arrayPosQuestion];
        $arrayAllNumbers[$arrayPosQuestion] = "..";
        $question = implode(" ", $arrayAllNumbers);
        $questionAnswerPairs[] = [$question,(string) $answer];
    }
    startGame($welcomeMessage, $questionAnswerPairs);
}
