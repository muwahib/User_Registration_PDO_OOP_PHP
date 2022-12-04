<?php
//class payment 1.cus_name, 2.amount, 3.item_name 4.account_zaad
require_once('transection.php');
class payment{

    public $cus_name;
    public $amount;
    public $item_name;
    public $account;

    public function __construct(){
        $this->cus_name;
        $this->amount;
        $this->item_name;
        $this->account;
    }
    public function customer(){
       return $this->cus_name; 
    }
    public function items(){
        return $this->item_name;
    }
    public function Amount_payment(){
        return $this->amount;
    }
    public function accounts(){
        return $this->account;
    }

}

?>



































<!-- 
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="div_form_container">
            <form action="#">
                <label>Customer Name:</label>
                <input type="text" name="cus_name"></br>
                <label>Amount:</label>
                <input type="text" name="amount"></br>
                <label>Item Name:</label>
                <input type="text" name="item_name"></br>
                <label for="Accounts">Choose the Accounts:</label>
                <select name="accounts" id="accounts">
                    <option value="cash"></option>
                    <option value="cash">CASH</option>
                    <option value="zaad">ZAAD</option>
                    <option value="edahab">EDAHAB</option>
                    <option value="atm">ATM CARD</option>
                </select>
            </form>
        </div>
        <div class="div_table_container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>customer Name</th>
                        <th>Amount</th>
                        <th>Item name</th>
                        <th>Selected</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</body>
</html> -->