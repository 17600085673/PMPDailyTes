<?php
class sf{
    public function Sum_Solution($n){
        $num=($n>1?$n+$this->Sum_Solution($n-1):1);
        return $num;
    }
}