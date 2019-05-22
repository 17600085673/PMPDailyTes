<?php
class sf{
    public function ReverseSentence($str){
      $arr=explode(' ',$str);
      $arrs=array_reverse($arr);
      $strs=implode(' ',$arrs);
      return $strs;
    }
}
$obj=new sf();
print_r($obj->ReverseSentence('student. a am I'));