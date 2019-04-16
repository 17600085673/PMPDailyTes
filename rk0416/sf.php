<?php
class sf{
    public function sc($arr){
        $arr1=[];
        $arr2=[];
        foreach ($arr as $k=>$v){
            if($v%2==0){
                $arr1[]=$v;
            }else{
                $arr2[]=$v;
            }
        }
        $arr3[]=array_merge($arr1,$arr2);
        return $arr3;
    }
}