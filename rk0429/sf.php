<?php
class sf{
    public function Combine($arr_A, $arr_B){
        for($i=0;$i<count($arr_A);$i++){
            for($j=0;$j<count($arr_B);$j++){
                if($arr_A[$i]>$arr_B[$j]){
                    $team=$arr_A[$i];
                    $arr_A[$i]=$arr_B[$j];
                    $arr_B[$j]=$team;
                }
            }
        }
   return array_merge($arr_A,$arr_B);
    }
}