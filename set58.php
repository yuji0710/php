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
$a=new DateTime("today");
$b=new DateTime("07-10-2023");
$diff=date_diff($b,$a);
echo "remaining total day of my birthday :- ".$diff->format('%d days ago %m month ago %y year ago ');
?>