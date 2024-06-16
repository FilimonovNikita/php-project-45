<?php

namespace BrainGames\Games\Even;

use function BrainGames\Cli\welcome;

function startEven()
{
    $welcomeMessage = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $question = rand(1, 100);
        $answer = $question % 2 === 0 ? "yes" : "no";
        $questionAnswerPairs[] = [$question, $answer];
    }

    startGame($welcomeMessage, $questionAnswerPairs);
}
/*
function even()
{
    $name = welcome();
    Question($name);
}

function isEven(int $number)
{
    $isNumberEven = $number % 2 == 0
    if ($number % 2 == 0)    {
        $isNumberEven = "yes";
    }
    else{
        $isNumberEven = "no";
    }
    return ($isNumberEven);
}

function isAnswerCorect ($isNumberEven, $ansver){
    if ($isNumberEven == $ansver){
        return true;
    }
    else {
        return false;
    }
}

function ansverVerification($ansver){
    $strloverAnsver=strtolower($ansver);
    switch ($ansver){
        case "yes":
            return ($strloverAnsver);
        case "no":
            return ($strloverAnsver);
        default:
            return "wrong input";
    }
}

function Question(string $name)
{
    echo 'Answer "yes" if the number is even, otherwise answer "no".';
    
    $questionNumber = 3;
    for ($i = 0; $i < $questionNumber; $i++)
    {
        $number = rand (0 , 100);
        $even =isEven($number);
        print_r ("Question: {$number}");
        $ansver = readline ("Your answer: ")
        ansverVerification ($ansver);
        isAnswerCorect ($even, $ansver);

    }
}*/