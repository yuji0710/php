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
    $date=new DateTime("today");
    $a=$date->format("N");
    if($a==7 || $a==6)
    {
        echo "it is weekend day ";
    }
    else
    {
        echo "it is not weekend day ".$date->format("l");
    }
?>
