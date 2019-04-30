<?php
class sf{
    public function NumberOf1($n){
        $str=decbin($n);
        $strs=substr_count($str,1);
        return $strs;
    }
}