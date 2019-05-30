<?php
class Sf{
    public function NumberOf1($n){
         $str=decbin($n);
         $strs=substr_count($str,1);
         return $strs;

    }
}
$obj=new Sf();
echo $obj->NumberOf1(10);