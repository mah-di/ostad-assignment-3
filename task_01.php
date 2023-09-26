<?php

print("================================ Task 1 ================================\n\n");

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText(string $text): void
{
    $modifiedText = strtolower($text);

    $modifiedText = str_replace('brown', 'red', $modifiedText);

    print($modifiedText);
}

modifyText($text);
