<?php
class sf{
    public function FindNumsAppearOnce($array){
         $arr=array_count_values($array);
         $ku[]=[];
         foreach($arr as $k=>$v){
             if($v==1){
                 $ku[]=$k;
             }
         }
         return $ku;
    }
}
$obj=new sf();
print_r($obj->FindNumsAppearOnce([2,4,3,6,3,2,5,5]));