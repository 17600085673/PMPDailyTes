<?php
class sf{
    public function CountSteps($x,$y){
        if($x==1){

            return 2;
        }
        if($y==1){

            return 2;
        }
        return $this->CountSteps($x+2,$y+2);
    }
}