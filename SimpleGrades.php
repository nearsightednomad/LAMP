<?php

require_once "../Utilities/functions.php";

$grade1 = getValue('grade1', 'grade 1 not specified');
$grade2 = getValue('grade2', 'grade 2 not specified');
$grade3 = getValue('grade3', 'grade 3 not specified');
$grade4 = getValue('grade4', 'grade 4 not specified');
$grade5 = getValue('grade5', 'grade 5 not specified');
$grades = array($grade1, $grade2, $grade3, $grade4, $grade5);
$sum = 0;
$maximum = $grades[1];
$minimum = $grades[1];
foreach ($grades as $partSum)
{
    $sum = $sum + $partSum;
}
$average = $sum/$grades.length();
foreach ($grades as $part)
{
    if ($part > $maximum)
    {
        $maximum = $part;
    }
}

foreach ($grades as $part)
{
    if ($part < $minimum)
    {
        $minimum = $part;
    }
}



echo
"<html>
    <head>
        <title>SimpleGrades.php</title>
    </head>
    <body>
        <p>Average: '$average' Maximum: '$maximum' Minimum: '$minimum'</p>
    </body>
</html>
"

?>