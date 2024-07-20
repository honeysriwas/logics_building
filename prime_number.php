<?php

function checkPrimeNumber($num){

    if($num==1)
        return 0;



    for($i=2; $i<=$num/$i; $i++){

        if($num%$i==0){

            return 0;

        }

    }

    return 1;

}

$checkPrimeNumber= checkPrimeNumber(23);

echo $checkPrimeNumber;

if($checkPrimeNumber==1){

    echo "Given Number is a Prime Number";

}else{

    echo "Given Number is not a Prime Number";

}


?>