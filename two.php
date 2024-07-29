<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="in">
        <input type="submit" name="submit" value="submit">
    </form>    

</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['in'];
        $c=0;
        while($a!=0)
        {
            $a=(int)$a/10;
            $c++;
            echo "{$a} {$c} - ";
        }
        echo "total number of digit is {$c} . ";
    }
?>