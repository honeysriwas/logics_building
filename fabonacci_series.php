<?php

function fab_series($num){

    $n1=0;
    $n2=1;
    $counter=0;

    echo $n1." ".$n2." ";

    while($counter<=$num){

        $n3=$n1+$n2;
        $n1=$n2;
        $n2=$n3;
        $counter++;

        echo " ".$n2;
    }

}

fab_series(10);
?>