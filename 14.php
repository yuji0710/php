<!-- Write a class called 'Math' with static methods like 'add()', 'subtract()', 'multiply()', and
‘divide()’. Use these methods to perform mathematical calculations -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1>math</h1>
    enter first number : <input type="text" name="num1"><br><br>
    enter second number : <input type="text"    name="num2">  <br><br>
    <input type="submit" name="submit"> 

    </form>
</body>
</html>
<?php
    class math {
       
        
        public static function add($a,$b)
        {
            return $a+$b;
        }
        public static function sub($a,$b)
        {
            return $a-$b;
        }
        public static function mul($a,$b)
        {
            return $a*$b;
        }
        public static function div($a,$b)
        {
            return $a/$b;
        }
    }
    if(isset($_POST['submit']))
    {
        $m=new math();
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        $add=$m::add($a,$b);
        $sub=$m::sub($a,$b);
        $mul=$m::mul($a,$b);
        $div=$m::div($a,$b);
        echo "add of two number : {$add}<br>subtract of two number {$sub} <br>multiply of two number {$mul}<br> divide of two number {$div}<br>";
        
    }
    
?>