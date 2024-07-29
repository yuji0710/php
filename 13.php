<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3>bank details </h3>
        enter your bank account number: <input type="text" name="accountnumber"><br><br>
        enter your bank balance: <input type="text" name="balance"><br><br>
        how many money u want to deposit : <input type="text" name="deposit"><br><br>
        how many money u want to withdraw :<input type="text" name="withdraw"><BR><BR> 
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
    class bankaccount implements detail
    {
        public $accountnumber,$balance,$deposit,$withdraw,$all;
        public function get_data()
        {
            $this->accountnumber=$_POST['accountnumber'];
            $this->balance=$_POST['balance'];
            if($_POST['deposit']!=NULL)
            {
                $this->deposit=$_POST['deposit'];
            }
            else
            {
                $this->deposit=0;
            }
            if($_POST['withdraw']!=NULL)
            {
                $this->withdraw=$_POST['withdraw'];
    
            }
            else
            {
                $this->withdraw=0;
            }
        }
        public function display()
        {
            $this->all=$this->balance+$this->deposit;
            $this->all=$this->all-$this->withdraw;
            echo "your bank account number :- {$this->accountnumber}<br>your bank balance:- {$this->balance}<br> your bank balance after all withdraw and deposit money :- {$this->all} .";
        }
    }
        if(isset($_POST['submit']))
        {   $h=new bankaccount();
            $h->get_data();
            $h->display();
            header("refresh:5");
        }

    
?>