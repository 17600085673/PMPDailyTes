<?php
class sf{
    public function index($str){
        $arr=[];
        if(strlen($str)==0){
            return false;
        }
        $len=strlen($str);
        for($i=0;$i<$len;$i++){
            if($str[$i]!=' '){
                if(isset($arr[$str[$i]])){
                    $arr[$str[$i]]+=1;
                }else{
                    return 1;
                }
                if($arr[$str[$i]]>=3){
                    return $arr[$str[$i]];
                }
            }
        }
      // return $arr;
    }
}