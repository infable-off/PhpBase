<?php
 $name = readline("Insert your name \n");
 $surname = readline("Insert your surname \n");
 $age = (int)readline("How old are you? \n");
 $numTask = (int)readline("How many task you have today? \n");
 $allTime = 0;
 echo ("Your name is $name $surname and your age is $age \n");
 $arr = array($numTask);

 echo ("You have only $numTask tasks on this day\n");

 for ($x = 1; $x <= $numTask;$x++){
     $task = readline("What is your challenge today?\n");
     $time = readline("Approximately how long will this task take?\n");
     $arr[$x] = "\n $task ($time h) \n";
     $allTime += $time;
 }
 
echo ("$name $surname Today you have $numTask priority tasks scheduled for the day: \n");
 
 foreach ($arr as $value){
     echo $value;
 }

echo ("Estimated time to complete the plan $allTime hours");

