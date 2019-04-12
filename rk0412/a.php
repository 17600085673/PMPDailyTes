<?php
for($i=1;$i<=9;$i++){
    for($j=0;$j<=9;$j++){
        for($k=0;$k<=9;$k++){
            if($i*$i*$i+$j*$j*$j+$k*$k*$k==100*$i+10*$j+$k){
                echo "$i$j$k";
                echo"\t";
            }
        }
    }
}