<?php
$wishes = ["счастья", "здоровья", "веселья", "успеха", "терпения"];
$epithets = ["удивительного", "невероятного", "потрясающего", "классного", "бесконечного", "космического", "межгалактического"];

$res = [];

for ($i = 0; $i < 3; $i++) {
    $res[$i] = $epithets[array_rand($epithets)] . " " . $wishes[array_rand($wishes)];
}

$name = readline("Как ваше имя? ");

echo "\nДорогой $name, поздравляю тебя С Днем рождения! Желаю " . implode(", ", $res) . "." . PHP_EOL;