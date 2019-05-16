<?php
class sf{
    static function calFn($n,$m){

        if($m<10){
            return 1;
        }
        $arr=range($n,$m);
        $str=implode('',$arr);
        $arrs=str_split($str);
        $tt=array_count_values($arrs);
        return $tt[1];
    }
}
var_dump(sf::calFn(1,11));