<?php 
class Calc{
    public $num1;
    public $num2;
    public $cal;
    public function __construct($num1,$num2,$cal){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->cal = $cal;

    }
    public function calc_method(){
        switch($this->cal) {
            case '+':
                $result=  $this->num1+$this->num2;
                break;
            case '-':
                $result= $this->num1 - $this->num2;
                break;
            case '*':
                $result=  $this->num1*$this->num2;
                break;
            case '%':
                $result=  $this->num1 % $this->num2;
                break;
            case '/':
                if($this->num2 == 0){
                    $result=  'INF';
                } else{
                    $result=  $this->num1 / $this->num2;
                }
            break;
            default:
                $result="error";
                break;
        }
        return $result;
    }

}

?>