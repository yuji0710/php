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
$a=new DateTime();
$b=new DateTime("01-01-2025 00:00:00");
$diff=$a->diff($b);
echo "remaining time for new year :- ".$diff->format('%m month %d days %h hour %i min %s sec');
?>