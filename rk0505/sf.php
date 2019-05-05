<?php
class sf{
	Public function index($arr,$a){
      foreach ($arr as $k => $v) {
      	# code...
      	if($v==$a){
          return $k;
      	}
      }
	}
	Public function dg($arr,$a){
		$i=0;
       if($a==$arr[$i]){
       	return $this->dg($arr,$i);
       }
	}
}