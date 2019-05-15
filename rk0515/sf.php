<?php
class sf{
    public function index($arr){
        $arro=[];
        $arrj=[];
        if(count($arr)==0){
            return '数组为空';
        }else{
            foreach($arr as $k=>$v){
                if($v%2==0){
                    $arro[]=$v;
                }else{
                    $arrj[]=$v;
                }
            }
            return array_merge($arrj,$arro);
        }
    }
}
$obj=new sf();
var_dump($obj->index([1,2,3,4,5,6]));