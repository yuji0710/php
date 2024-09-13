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
$a=new DateTime("01-01-2024");
$v=6;
$a->modify("+$v day");
echo $a->format("d-m-Y");
?>