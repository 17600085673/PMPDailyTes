<?php
include 'sf.php';
$obj=new sf();
var_dump($obj->Find(7,[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]]));