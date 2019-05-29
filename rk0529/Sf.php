<?php
class Sf{
    public static function Combine($arr_A,$arr_B){
         for($i=0;$i<count($arr_A);$i++){
             for($j=0;$j<count($arr_B);$j++){
                 if($arr_A[$i]>$arr_B[$j]){
                     $taem=$arr_A[$i];
                     $arr_A[$j]=$arr_B[$j];
                     $arr_B[$j]=$taem;
                 }
             }
         }
         return array_merge($arr_A,$arr_B);
    }
}
print_r(Sf::Combine([1,3,6,9],[2,4,5,8,20]));
