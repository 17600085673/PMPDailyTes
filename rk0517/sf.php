<?php
class sf{
    public function GetUglyNumber_Solution($index){
      if(!$index){
          return '请重新输入';
      }
      if ($index%2==0){
          $num=$index/2;
      }
      if($index%3==0){
          $num=$index/3;
      }
      if($index%5==0){
          $num=$index/5;
      }
      if($num==1){
          return "这个数是丑数";
      }else{
          return "这个数不是丑数";
      }
    }
}
$obj=new sf();
var_dump($obj->GetUglyNumber_Solution(2));