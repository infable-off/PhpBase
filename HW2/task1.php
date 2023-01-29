<?php
$task = "выберите номер ответа где представлен верный год начала первой мировой войны";
echo "
1) 1915
2) 1914
3) 1916" . PHP_EOL;
$value = false;

while ($value != true){
    $answer = (int)readline();
    if ($answer == 2){
        echo "Поздравляем, вы ответили верно";
        $value = true;
    } elseif ($answer == 1 || $answer == 3){
        echo "вы ответили неверно";
        $value = true;
    }
}
