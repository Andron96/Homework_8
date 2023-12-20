<?php

function writeToFile(string $filename, string $wData): string
{
    $wResult = file_put_contents($filename, $wData, FILE_APPEND);
    if ($wResult > 0) {
        return "Данные успешно записаны.\n";
    } else {
        return "Данные записаны неуспешно.\n";
    }
}
function readFromFile(string $filename): string
{
    return file_get_contents($filename);
}