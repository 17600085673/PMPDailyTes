<?php
class sf{
    public static function ReverseSentence($str){
        $arr=explode(' ',$str);
        $arrs=array_reverse($arr);
        $strs=implode(' ',$arrs);
        return $strs;
    }


}