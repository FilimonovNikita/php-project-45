<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Cli.php';
use function BrainGames\Cli\welcome;
/*use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}*/

welcome();

echo "Вызов сделан";
