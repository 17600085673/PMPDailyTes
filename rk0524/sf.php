<?php
class sf{
    public function Add($num1,$num2){
           if($num2==0){
               return $num1;
           }
           $sum=$num1^$num2;
           $carry=($num1&$num2)<<1;
           return $this->Add($sum,$carry);
    }
}
$obj=new sf();
var_dump($obj->Add(4,5));