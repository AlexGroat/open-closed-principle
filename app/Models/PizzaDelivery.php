<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaDelivery extends Model
{
    use HasFactory;

    public function deliver()
    {
        $prepare = 'place pizza in car';
        $travel = ' and drive down the road';
        $customer = ' then give pizza to happy customer';
        return $prepare . $travel . $customer;
    }
}

$pizza = new PizzaDelivery();
echo $pizza->deliver();

/* here is a perfectly good class that is able to deliver pizza in a fine manner. What if pizzas needed
to be delivered by boat.*/
