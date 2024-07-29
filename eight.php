<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3> fact of number </h3>
        <br>
        enter number : <input type="text" name="num">
        <br><input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=(int)$_POST['num'];
        $ans=1;
        for ($i=1; $i <$a+1 ; $i++) { 
            $ans=$ans*$i;

        }
        echo "ans is {$ans} ";
        header("refresh:3");
    }

?>