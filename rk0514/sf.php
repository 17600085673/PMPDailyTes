<?php
class sf{
    public function calSteps($n){
        if($n==1){
            return 1;
        }
        if($n==2){
            return 1;
        }
        return $this->calSteps($n-1)+$this->calSteps($n-2);
    }
}
$obj=new sf();
echo $obj->calSteps(12);