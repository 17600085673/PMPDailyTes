<?php
class sf{
    public function FindNumbersWithSum($array, $sum){
        $a=[];
        $len=count($array);
        for($i=0;$i<$len;$i++){
            for($j=0;$j<$len;$j++){
                if($array[$i]+$array[$j]==$sum){
                    $a[]=$array[$i]*$array[$j];
                }
            }
        }
        sort($a);
        return $a[0];
    }
}