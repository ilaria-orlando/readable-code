<?php

echo 'Creating new order... <br> <br>';

function orderPizza($pizzatype, $client) {
    $totalprice = pizzaCost($pizzatype);
    $address = 'unknown';
    
    if($client == 'Koen'){
        $address = 'A yacht in Antwerp';
    
    } elseif ($client == 'Manuele'){
        $address = 'Somewhere in Belgium';
    
    } elseif ($client  == 'Students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' Pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    $toPrint = 'A '.$pizzatype;
    echo'The bill is €'.$totalprice.'.<br>';
    echo "Order finished.<br><br>";
   
}


function pizzaCost($pizzatype){
    $cost = 'unknown';

    if ($pizzatype == 'Marguerita') {
        $cost = 5;
    }
    if ($pizzatype == 'Golden'){
        $cost = 100;
    }
    if ($pizzatype == 'Calzone'){
        $cost = 10;
    }
    if ($pizzatype == 'Hawai') {
        throw new Exception('Computer says no');
       
    }
        return $cost;
       
}
   

function totalAllPizza(){

    orderPizza('Calzone', 'Koen');
    orderPizza('Marguerita', 'Manuele');
    orderPizza('Golden', 'Students');
}

totalAllPizza();
