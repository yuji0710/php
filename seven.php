<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3>sum of two numbers </h3>
        <br>
        enter first number : <input type="text" name="num">
        <br>enter second number : <input type="text" name="num2">
        <br><input type="submit" name="submit">

    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=(int)$_POST['num'];
        $b=(int)$_POST['num2'];
        $ans=$a===$b ?($a+$b)*3 : $a+$b;
        echo "ans is {$ans}";
    }
?>