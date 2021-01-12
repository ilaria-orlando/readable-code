<?php

//TODO: rename variables to clearer names
//TODO: Combine all the $toprint vars into one
//TODO: Change funcion names to clearer ones
//TODO: REmove function: Total_Price()
//TODO: Cleaning up the syntax


function orderPizza($pizzaType, $client) {

    $pizzaType;

    $totalPrice = pizzaCost($pizzaType);

    $address = 'unknown';
    if($client == 'Koen') {
        $address = 'a yacht in Antwerp';

    } elseif ($client == 'Manuele') {
        $address = 'somewhere in Belgium';

    } elseif ($client == 'Students') {
        $address = 'BeCode office';
    }

    $clientOrder = 'A ' . $pizzaType . ' pizza should be sent to ' . $client . ' <br>The address: ' . $address;


    echo $clientOrder; echo '<br>';
    echo'The bill is €'.$totalPrice.'.<br>';
    echo "Order finished.<br><br>";
}
echo 'Creating new order... <br><br>';

function test($pizzaType) {
    echo "Test: type is {$pizzaType}. <br>";
}

//TODO: Change function name
//TODO: change name var: $cst
//TODO: cleaning up the syntax
function pizzaCost($pizzaType)
{
    $cost = 'unknown';

    if ($pizzaType == 'Marguerita') {
        $cost = 5;
    }
    else
    {
        if ($pizzaType == 'Golden') {
            $cost = 100;
        }
        if ($pizzaType == 'Calzone') {
            $cost = 10;
        }

        if ($pizzaType == 'Hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
}

function totalAllPizza()
{
    orderPizza('Calzone', 'Koen');
    orderPizza('Marguerita', 'Manuele');

    orderPizza('Golden', 'Students');
}

totalAllPizza();

