<?php
declare(strict_types=1);

function writeToFile(string $filename): void
{
    file_put_contents($filename, readline("Введите данные для записи: ") . "\n", FILE_APPEND);
}
function readFromFile(string $filename): void
{
    echo file_get_contents($filename);
}

$filename = readline("Введите имя/путь файла: ");
if (file_exists($filename)) {
    while (true) {
        $mode = (int) readline("Для записи в файл введите \"1\"; для чтения из файла - \"2\"; для выхода из программы - любое другое число: ");
        switch ($mode) {
            case 1:
                writeToFile($filename);
                break;
            case 2:
                readFromFile($filename);
                break;
            default:
                break 2;
        }
    }
} else {
    echo "Такого файла не существует";
}