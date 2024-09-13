<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  
        $a=array(
            array(1,1,1),
            array(2,2,2),
            array(3,3,3)
        );
        $b=array(
            array(2,2,2),
            array(3,3,3),
            array(4,4,4)
        );
        for( $i=0;$i<3;$i++)
        {   for($j=0;$j<3;$j++)
            {
               
               echo( $a[$i][$j]+$b[$i][$j]);
               echo( "  ");
            }
            echo("<br>");
        }
        
    ?>
</body>
</html>