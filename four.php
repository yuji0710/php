<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #center{
            text-align: center;
        }
        #c{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #m{
            border:2px solid black;
            margin: 0px 900px 0px 0px;
            padding: 0px 10px 10px 0px;
        }
        input
        {
            padding-right: 150px;
            
        }
        #c1{
            padding-left: 140px;
            border: 0px;
            background-color: goldenrod;
            padding-right: 140px;
            height: 40px;
        }
    </style>
</head>
<body>
    <div id="m">
        <h4 align="right">login</h4>
    <div id="center">
        <h1>Registration</h1>
        <h4 style="color: red;">Email already exists</h4>
    </div>
    <div id="c">
        <form>
            Username<br><input type="text" name="uname"><br>
            <br>Email<br><input type="email" name="email"><br>
            <br>Password<br><input type="password" name="pass"><br>
            <br>Confirm Password<br><input type="password" name="conpass"><br>
            <br><input type="submit" id="c1"value="sign up" name="submit">

            


        </form>
    </div>
</div>   
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $u=$_POST['uname'];
        $e=$_POST['email'];
        $p=$_POST['pass'];
        $cp=$_POST['conpass'];
        if($u!=NULL && $e!=NULL && $p!=NULL && $cp!=NULL )
        {
        
        }
        else
        {
            echo "enter your details ";
        }
    }
?>
