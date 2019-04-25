<?php
class sf{
    public function Add($num1,$num2) {
        if($num2==0){
            return $num1;
        }
        $a=$num1^$num2;
        $b=($num1&$num2)<<1;
        return $this->Add($a,$b);
    }
}