<?php
class sf{
    public function Find($target,$array){
              if($array[0][0]>$target){
                  return false;
              }
              for($i=0;$i<count($array);$i++){
                  for($j=0;$j<count($array);$j++){
                      if(in_array($array[$i][$j],$target)){
                          return true;
                      }
                  }
              }
    }
}
$obj=new sf();
var_dump($obj->Find(7,[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]]));