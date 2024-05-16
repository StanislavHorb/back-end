<?php

$subject = 'Практична 1';
echo "Тема: " . $subject . "\n";

$firstName = 'Stanislav Horb | group 539';
$name = "Ім'я: {$firstName}" . "\n";

// Опис
$title = $subject . "\n";
$desc = "Перша практична" . "\n";

$message = $name . $title . $desc;

echo "\n" . 'Тіло повідомлення:' . "\n";

echo $message . "\n";


$headers = 'From: forcecomru2@gmail.com';

if (mail('s.a.gorb@student.khai.edu', $subject, $message, $headers)) {
    echo "Лист успішно надіслано";
} else {
    echo "Помилка при відправленні листа";
}

?>