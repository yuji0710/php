<!-- Write a PHP script to get time difference in days and years, months, days,
hours, minutes, seconds between two dates -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $a=new DateTime("01-01-2021");
    
    $b=new DateTime("01-01-2020");
    $diff=date_diff($a,$b);
    echo $diff->format('%y years, %m months, %d days');
?>