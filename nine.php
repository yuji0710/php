<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <br><br>
        Enter Your age :-- <input type="text" name="num"><br><br>
        <input type="submit" name="submit" value="sumit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=(int)($_POST['num']);
        $s= $a>=18 ? "yes it is ":"no it not ";
        echo $s;
        header("refresh:3 ");
    }
    