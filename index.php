<?php
declare(strict_types=1);

$filename = readline("Введите имя/путь файла: ");
if (file_exists($filename)) {
    while (true) {
        $mode = (int) readline("Для записи в файл введите \"1\"; для чтения из файла - \"2\"; для выхода из программы - любое другое число: ");
        switch ($mode) {
            case 1:
                $wData = readline("Введите данные для записи: ") . "\n";
                echo writeToFile($filename, $wData);
                break;
            case 2:
                echo readFromFile($filename);
                break;
            default:
                break 2;
        }
    }
} else {
    echo "Такого файла не существует";
}