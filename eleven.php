<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        enter rect height: <input type="text" name="h">
        <br>
        <br>
        enter rect width : <input type="text" name="w">
        <br>
        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
<?php
interface func
{
    public function ar();
    public function per();
}
class rect implements func
{
    public $a;
    public $b;
    public $area,$per;
public function __construct()
{
    $this->a=(int)$_POST['h'];
    $this->b=(int)$_POST['w'];
    
}

public function ar()
{
    $this->area=$this->a*$this->b;
}
public function per()
{
    $this->per=($this->a+$this->b)*2;
}
}
    if(isset($_POST['submit']))
    {   $r =new rect;
        $r->ar();
        $r->per();
        echo "area ={ $r->area}<br>";
        echo "perameter = {$r->per}";
        header("refresh:3");

    }
?>