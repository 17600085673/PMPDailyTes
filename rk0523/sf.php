<?php
class sf{
    public function Sum_Solution($n){
        $num=$n<1?1:$n+$this->Sum_Solution($n-1);
        return $num;
    }
}
$obj=new sf();
$d=$obj->Sum_Solution(5);
echo "$d";