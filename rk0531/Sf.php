<?php
class Sf{
    public function index($arr,$n){
        foreach ($arr as $k=>$v){
            if($v==$n){
                return $k;
            }
        }
    }
    public function dg($arr,$n){
        $i=0;
        if($arr[$i]==$n){
            $this->dg($arr[$i],$n);
        }
        return $i;
    }
}
$obj=new Sf();
var_dump($obj->index([1,2,3,4,5,6],5));
var_dump($obj->dg([1,2,3,4,5,6],5));