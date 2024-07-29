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
        $a= $_POST['in'];
        $a1=strtolower($a);
        $v=['a','e','i','o','u'];
        if(in_array($a1,$v))
        {
            echo "it is vowel";
        }
        else
        {
            echo "it is not vowel";
        }
  
    }

?>