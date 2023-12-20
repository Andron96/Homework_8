<?php
declare(strict_types=1);

$filename = "files/one file.txt";
if (file_exists($filename)) {
    while (true) {
        $mode = (int) readline("Для записи в файл введите \"1\"; для чтения из файла - \"2\"; для выхода из программы - любое другое число: ");
        switch ($mode) {
            case 1:
                $wData = readline("Введите данные для записи: ");
                file_put_contents($filename, $wData . "\n", FILE_APPEND);
                break;
            case 2:
                $rData = file_get_contents($filename);
                echo "Данные файла:\n$rData";
                break;
            default:
                break 2;
        }
    }
}