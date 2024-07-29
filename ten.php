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
        Enter Your Number :-- <input type="text" name="num"><br><br>
        <input type="submit" name="submit" value="sumit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=(float)($_POST['num']);
        if($a>250)
        {
            $ans=$a*6.50;
        }
        else
        {   
            if($a>0 && $a<=50)
            {
                $ans=(float)($a*3.50);
            }
            elseif ($a>50 && $a<=150) 
            {
                $ans=(float)(50*3.50);
                $a=$a-50;
                $ans=(float)($ans+$a*4);
            }
            elseif($a>150 && $a<=250)
            {
                $ans=(float)(50*3.50);
                $a=$a-50;
                $ans=(float)($ans+100*4);
                $a=$a-100;
                $ans=(float)($ans+$a*5.20);
            
            }
        }
        echo "ans is {$ans}";
    }


    ?>
   