<?php
//class transection 1.account 2.money
require_once('payment.php');
class transection extends payment{
    public $account;
    public $money;
    private $pay;

    public function __construct()
    {
        $this->account;
        $this->money;
    }
    public function paid(){
        // $pay = new payment();
        $items = $this->item_name;
        $transections= $this->money;
        if($transections->amount !== ""){
            echo "Money transefered successfully";
        }else{
            echo "please pay the money!!";
        }
        return $transections;
    }
    public function account_used(){
        $accounts=$this->account;
        if($accounts == "cash"){
            echo "Cash has been used";
        }else if($accounts == "Zaad"){
            echo "it's been paid by Zaad";
        }else if($accounts == "Edahab"){
            echo "it's been paid by Edahab";
        }else if($accounts == "ATM card"){
            echo "it's been paid by Card";
        }else{
            echo "please use one of the options above to pay the money";
        }
    }


}


?>