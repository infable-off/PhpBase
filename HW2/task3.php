<?php
$numFinger = -1;
$value = false;
while ($value != true){
    $numFinger = (int)readline();
    if ($numFinger > 0){
        $value = true;
        $numFinger = $numFinger % 10;
        if ($numFinger == 0){
            echo 1;
        } else echo $numFinger;
    }
}
