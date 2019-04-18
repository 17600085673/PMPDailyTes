<?php
class sf{
    public static function cs($n){
        while ($n%2==0){
            $n/=2;
        }
        while ($n%3==0){
            $n/=3;
        }
        while ($n%5==0){
            $n/=5;
        }
        if($n==1){
            return true;
        }else{
            return false;
        }
    }
    public function index($index){
        for($i=1;$i<=$index;$i++){
            if(self::cs($i)){
                echo $i.'是丑数';
                echo "<br/>";
            }else{
                echo $i.'不是是丑数';
                echo "<br/>";
            }

        }


    }


}