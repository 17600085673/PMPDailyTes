<?php
class sf{
    public function LastRemaining_Solution($n, $m){
        $list=range(1,$n);
        $num=1;
        while(count($list)>1){
            foreach ($list as $k=>$v){
                if($num==$m){
                    unset($list[$k]);
                    $num=1;
                    continue;
                }
                $num++;
            }
        }
        return $list;
    }
}