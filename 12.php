<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3>vehicles</h3>
        enter your vehicle's brand: <input type="text" name="brand"><br><br>
        enter your vehicle's model: <input type="text" name="model"><br><br>
        enter your vehicle's year: <input type="text" name="year"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 
    interface detail
    {
        public function display();
        public function get_data();
    }
    class vehicle implements detail
    {
        public $brand,$model,$year;
        public function get_data()
        {
            $this->brand=$_POST['brand'];
            $this->model=$_POST['model'];
            $this->year=$_POST['year'];

        }
        public function display()
        {
            echo "your vehicle brand :- {$this->brand}<br>your vehicle model:- {$this->model}<br> your vehicles year:- {$this->year} .";
        }
    }
        if(isset($_POST['submit']))
        {   $h=new vehicle();
            $h->get_data();
            $h->display();
        }

    
?>