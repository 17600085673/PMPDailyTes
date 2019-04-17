<?php
class sf{
    public function one($n,$m){
        if($m==0){
            return 0;
        }elseif ($m==1){
            return 1;
        }
        $st=range($n,$m);
        $str=implode($st);
        //var_dump($str);
       // return $str;
        $arr=str_split($str);
        $tt=array_count_values($arr);
        return $tt[1];

    }
}