<?php

$students = array(
"Fadhili" => 85, 
"Elia" => 90,
"Feng" => 78,
"Imma" => 92,
"Israel" => 88

);

foreach ($students as $name => $mark){
    echo"$name scored:  $mark marks.<br>";
}

function calculateAverage($students){
    $total = array_sum($students);
    $count = count($students);
    return $total / $count;
}

$average = calculateAverage($students);
echo "<br> The average mark is: $average";



if($average > 70){
    echo "<br>Class performance is Good";
}
elseif($average >= 50 & $average <= 70){
    echo "Class performance is Average";
}
else
{
    echo "Class performance is Poor";
}